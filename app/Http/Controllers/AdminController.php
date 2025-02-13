<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\HasRole;
use App\Models\ModelHasRole;
use App\Models\Product;
use App\Models\ProductBasket;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function admin()
    {

//        Role::create(['name' => 'admin-category' , 'guard_name' => 'web']);

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

    public function users()
    {
        $users = User::all();

        return view('admin.users-list', ['users' => $users]);
    }

    public function userEdit($id)
    {
        $user = User::findOrfail($id);
        return view('admin.users-edit' , ['user' => $user]);
    }

    public function userUpdate(Request $request)
    {
        $user = User::findOrfail($request->input('id'));

        if ($user->email != $request->input('email')) {
            $request->validate([
                'email' => 'required|string|email|max:255|unique:users',
            ]);
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|min:11|max:11',
        ]);

        $user
        ->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
        ]);

        return redirect(route('users-list'));
    }

    public function userDelete($id)
    {
        $user = User::find($id);
        $user->syncRoles([]);

        User::findOrfail($id)->delete();

        return redirect(route('users-list'));
    }

    public function userRegister()
    {
        return view('admin.users-register');
    }

    public function userInsert(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'phone' => 'required|string|min:11|max:11',
        ]);

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'password' => Hash::make($request->input('password')),
        ]);

        return redirect(route('users-list'));
    }

    public function invoiceList()
    {
        $productbaskets = ProductBasket::all();

        return view('admin.invoice-list' , ['productbaskets' => $productbaskets]);
    }

    public function invoiceDelete($id)
    {
        ProductBasket::findOrfail($id)->delete();

        return redirect(route('invoice-list'));
    }

    public function roleList()
    {
        $hasroles = ModelHasRole::all();

        return view('admin.role-list',['hasroles' => $hasroles]);
    }

    public  function  roleCreate()
    {
        $users = User::all();
        $roles = Role::all();

        return view('admin.role-create' , ['users' => $users , 'roles' => $roles]);
    }

    public function roleInsert(Request $request)
    {
        $userId = $request->input('id');
        $role = $request->input('role');

        $user = User::find($userId);
        $user->assignRole($role);

        return redirect(route('role-list'));
    }

    public function roleDelete($id , $role)
    {
        $user = User::find($id);

        $user->removeRole($role);

        return redirect(route('role-list'));
    }

}
