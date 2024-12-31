<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        return view('admin.panel');
    }

    public function categoryList()
    {
        $categories = Category::all();
        return view('admin.category-list', ['categories' => $categories]);
    }

    public function productList()
    {
        $products = Product::all();
        return view('admin.product-list', ['products' => $products]);
    }

    public function productCreate()
    {
        $categories = Category::all();
        return view('admin.product-create', ['categories' => $categories]);
    }

    public function productInsert(Request $request)
    {
        $request->validate([
            'name' => 'required|max:30|unique:products,name',
            'price' => 'required|integer',
            'image' => 'required|mimes:png,jpg,webp'
        ]);

        Product::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'category_id' => $request->input('category'),
            'description' => $request->input('description'),
            'image' => $image = time() . '-' . $request->file('image')->getClientOriginalName(),
            $request->file('image')->move(public_path('img'), $image),
            'is_slide' => $request->input('is_slide') ?? 0
        ]);

        return redirect(route('product-list'));
    }

    public function productEdit($id)
    {
        $categories = Category::all();
        $product = Product::findOrfail($id);
        return view('admin.product-edit', [
            'product' => $product,
            'categories' => $categories
        ]);
    }

    public function productUpdate(Request $request)
    {
        $product = Product::findOrfail($request->input('id'));
        
        if ($product->name != $request->input('name')) {
            $request->validate([
                'name' => 'required|max:30|unique:products,name'
            ]);
        }

        $image = false;

        if ($request->file('image')) {
            $request->validate([
                'image' => 'required|mimes:png,jpg,webp'
            ]);
            $image = time() . '-' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('img'), $image);
        }

        $request->validate([
            'price' => 'required|integer'
        ]);

        if ($image) {
            $product
            ->update([
                'name' => $request->input('name'),
                'price' => $request->input('price'),
                'category_id' => $request->input('category'),
                'description' => $request->input('description'),
                'image' => $image,
                'is_slide' => $request->input('is_slide') ?? 0
            ]);
        } else {
            $product
            ->update([
                'name' => $request->input('name'),
                'price' => $request->input('price'),
                'category_id' => $request->input('category'),
                'description' => $request->input('description'),
                'is_slide' => $request->input('is_slide') ?? 0
            ]);
        }

        return redirect(route('product-list'));
    }

    public function productDelete($id)
    {
        Product::findOrfail($id)->delete();

        return redirect(route('product-list'));
    }

    public function categoryCreate()
    {
        return view('admin.category-create');
    }

    public function categoryInsert(Request $request)
    {
        $request->validate([
            'name' => 'required|max:25|unique:categories,name',
            'description' => 'max:500',
            'image' => 'required|mimes:png,jpg,webp'
        ]);

        Category::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'image' => $image = time() . '-' . $request->file('image')->getClientOriginalName(),
            $request->file('image')->move(public_path('img'), $image)
        ]);

        return redirect(route('category-list'));
    }

    public function categoryEdit($id)
    {
        $category = Category::findOrfail($id);
        return view('admin.category-edit', ['category' => $category]);
    }

    public function categoryUpdate(Request $request)
    {
        $category = Category::findOrfail($request->input('id'));

        if ($category->name != $request->input('name')) {
            $request->validate([
                'name' => 'required|max:25|unique:categories,name'
            ]);
        }

        $image = false;

        if ($request->file('image')) {
            $request->validate([
                'image' => 'required|mimes:png,jpg,webp'
            ]);
            $image = time() . '-' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('img'), $image);
        }

        $request->validate([
            'description' => 'max:500',
        ]);

        if ($image) {
            $category
            ->update([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'image' => $image
            ]);
        } else {
            $category
            ->update([
                'name' => $request->input('name'),
                'description' => $request->input('description')
            ]);
        }

        return redirect(route('category-list'));
    }

    public function categoryDelete($id)
    {
        Category::findOrfail($id)->delete();

        return redirect(route('category-list'));
    }
}
