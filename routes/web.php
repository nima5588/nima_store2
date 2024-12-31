<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class , 'home'])->name('home');

Route::get('/basket/cart', [HomeController::class, 'cartBasket'])->name('cart-basket');

Route::get('/basket/delete/{id}', [BasketController::class, 'delete'])->name('basket-delete');

Route::get('/basket/add/{product_id}', [BasketController::class , 'add'])->name('basket-add');

Route::get('/checkout/{user_id}', [BasketController::class , 'checkout'])->name('basket-checkout');

Route::get('/search', [HomeController::class , 'search'])->name('search');

Route::get('/product/search', [HomeController::class , 'productSearch'])->name('product-search');

Route::get('/category/search', [HomeController::class , 'categorySearch'])->name('category-search');

Route::get('/product/{id}', [HomeController::class , 'product'])->name('product');

Route::get('/admin', [AdminController::class , 'admin'])->name('admin')->middleware(['auth' , 'auth.role.admin']);

Route::get('/admin/category/list', [AdminController::class , 'categoryList'])->name('category-list')->middleware(['auth' , 'auth.role.admin']);

Route::get('/admin/product/list', [AdminController::class , 'productList'])->name('product-list')->middleware(['auth' , 'auth.role.admin']);

Route::get('/admin/product/create', [AdminController::class , 'productCreate'])->name('product-create')->middleware(['auth' , 'auth.role.admin']);

Route::post('/admin/product/insert', [AdminController::class , 'productInsert'])->name('product-insert')->middleware(['auth' , 'auth.role.admin']);

Route::get('/admin/product/edit/{id}', [AdminController::class , 'productEdit'])->name('product-edit')->middleware(['auth' , 'auth.role.admin']);

Route::post('/admin/product/update', [AdminController::class , 'productUpdate'])->name('product-update')->middleware(['auth' , 'auth.role.admin']);

Route::get('/admin/product/update/{id}', [AdminController::class , 'productDelete'])->name('product-delete')->middleware(['auth' , 'auth.role.admin']);

Route::get('/admin/category/create', [AdminController::class , 'categoryCreate'])->name('category-create')->middleware(['auth' , 'auth.role.admin']);

Route::post('/admin/category/insert', [AdminController::class , 'categoryInsert'])->name('category-insert')->middleware(['auth' , 'auth.role.admin']);

Route::get('/admin/category/edit/{id}', [AdminController::class , 'categoryEdit'])->name('category-edit')->middleware(['auth' , 'auth.role.admin']);

Route::post('/admin/category/update', [AdminController::class , 'categoryUpdate'])->name('category-update')->middleware(['auth' , 'auth.role.admin']);

Route::get('/admin/category/delete/{id}', [AdminController::class , 'categoryDelete'])->name('category-delete')->middleware(['auth' , 'auth.role.admin']);

Auth::routes();

Route::get('/logout', [LogoutController::class , 'logout'])->name('logout');