<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductBasket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home(Request $request)
    {
        $products = Product::paginate(8);
        $categories = Category::withCount('products')->get();

        if ($request->get('category')) {
            $categoryId = $request->get('category');
            $products = Product::where('category_id', '=', $categoryId)->paginate(5);
        }

        $sliderProducts = Product::where('is_slide', '=', 1)->orderByDesc('updated_at')->limit(10)->get();

        $baskets = null;
        if (Auth::user()) {
            $baskets = ProductBasket::where('user_id', '=', Auth::user()->id)->where('is_paying' , '=' , 0)->get();
        }

        $total = 0;
        
        if ($baskets === null) {
            foreach ([] as $basket) {
                $total += $basket->product()->price * $basket->count;
            }
        } else {
            foreach ($baskets as $basket) {
                $total += $basket->product()->price * $basket->count;
            }
        }
        

        return view('front.index', [
            'products' => $products,
            'categories' => $categories,
            'sliderProducts' => $sliderProducts,
            'baskets' => $baskets,
            'total' => $total
            ]);
    }


    public function product($id)
    {
        $product = Product::findOrfail($id);

        $baskets = null;
        if (Auth::user()) {
            $baskets = ProductBasket::where('user_id', '=', Auth::user()->id)->where('is_paying' , '=' , 0)->get();
        }

        $total = 0;

        if ($baskets === null) {
            foreach ([] as $basket) {
                $total += $basket->product()->price * $basket->count;
            }
        } else {
            foreach ($baskets as $basket) {
                $total += $basket->product()->price * $basket->count;
            }
        }


        return view('front.product', [
            'product' => $product,
            'baskets' => $baskets,
            'total' => $total
        ]);
    }


    public function search(Request $request)
    {
        $q = $request->get('q');

        $products = Product::where('name', 'like', '%'.$q.'%')->get();

        return view('front.search', ['products' => $products]);
    }

    public function productSearch(Request $request)
    {
        $q = $request->get('q');

        $products = Product::where('name', 'like', '%'.$q.'%')->get();

        return view('admin.product-search', ['products' => $products]);
    }

    public function categorySearch(Request $request)
    {
        $q = $request->get('q');

        $categories = Category::where('name', 'like', '%'.$q.'%')->get();

        return view('admin.category-search', ['categories' => $categories]);
    }

    public function cartBasket()
    {
        $baskets = null;
        if (Auth::user()) {
            $baskets = ProductBasket::where('user_id', '=', Auth::user()->id)->where('is_paying' , '=' , 0)->get();
        }

        $total = 0;

        foreach ($baskets as $basket) {
            $total += $basket->product()->price * $basket->count;
        }

        return view('front.cartbasket', [
            'baskets' => $baskets,
            'total' => $total
        ]);
    }
}