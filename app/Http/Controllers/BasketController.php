<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductBasket;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{
    public function add($product_id)
    {

        $product = ProductBasket::where('user_id' , '=' , Auth::user()->id)
        ->where('product_id' , '=' , $product_id)
        ->where('is_paying' , '=' , 0)->first();

        if ($product) {
            $product->update(['count' => $product->count + 1]);
        } else {
            ProductBasket::create([
                'product_id' => $product_id,
                'count' => 1,
                'user_id' => Auth::user()->id
            ]);
        }


        return redirect()->back();
    }

    public function delete($id)
    {
        $basket = ProductBasket::where('user_id', '=', Auth::user()->id)
        ->where('id', '=', $id)
        ->where('is_paying', '=', 0)->first();

        if ($basket) {
            $basket->delete();
            return redirect()->back();
        } else {
            return "not found";
        }
    }

    public function checkout($user_id)
    {
        $baskets = ProductBasket::where('user_id' , '=' , $user_id)->where('is_paying' , '=' , 0)->get();
        $wallet = Wallet::where('user_id' , '=' , $user_id)->first();

        $total = 0;

        foreach ($baskets as $basket) {
            $total += $basket->product()->price * $basket->count;
        }

        if (isset($wallet->price) && $wallet->price >= $total)
        {
            $wallet->update(['price' => $wallet->price - $total]);
            foreach ($baskets as $basket) {
                $basket->update(['is_paying' => 1]);
            }
        } else {
            return view('front.nototalcart');
        }


        return view('front.totalcart');
    }
}
