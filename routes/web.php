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

Route::get('/users/search', [HomeController::class , 'usersSearch'])->name('users-search');

Route::get('/invoice/search', [HomeController::class , 'invoiceSearch'])->name('invoice-search');

Route::get('/role/search', [HomeController::class , 'roleSearch'])->name('role-search');

Route::get('/product/{id}', [HomeController::class , 'product'])->name('product');

Route::get('/admin', [AdminController::class , 'admin'])->name('admin')->middleware(['role:super-admin|admin-product|admin-category']);

Route::get('/admin/product/list', [AdminController::class , 'productList'])->name('product-list')->middleware(['role:super-admin|admin-product']);

Route::get('/admin/product/create', [AdminController::class , 'productCreate'])->name('product-create')->middleware(['role:super-admin|admin-product']);

Route::post('/admin/product/insert', [AdminController::class , 'productInsert'])->name('product-insert')->middleware(['role:super-admin|admin-product']);

Route::get('/admin/product/edit/{id}', [AdminController::class , 'productEdit'])->name('product-edit')->middleware(['role:super-admin|admin-product']);

Route::post('/admin/product/update', [AdminController::class , 'productUpdate'])->name('product-update')->middleware(['role:super-admin|admin-product']);

Route::get('/admin/product/update/{id}', [AdminController::class , 'productDelete'])->name('product-delete')->middleware(['role:super-admin|admin-product']);

Route::get('/admin/category/list', [AdminController::class , 'categoryList'])->name('category-list')->middleware(['role:super-admin|admin-category']);

Route::get('/admin/category/create', [AdminController::class , 'categoryCreate'])->name('category-create')->middleware(['role:super-admin|admin-category']);

Route::post('/admin/category/insert', [AdminController::class , 'categoryInsert'])->name('category-insert')->middleware(['role:super-admin|admin-category']);

Route::get('/admin/category/edit/{id}', [AdminController::class , 'categoryEdit'])->name('category-edit')->middleware(['role:super-admin|admin-category']);

Route::post('/admin/category/update', [AdminController::class , 'categoryUpdate'])->name('category-update')->middleware(['role:super-admin|admin-category']);

Route::get('/admin/category/delete/{id}', [AdminController::class , 'categoryDelete'])->name('category-delete')->middleware(['role:super-admin|admin-category']);

Route::get('/admin/users/list', [AdminController::class , 'users'])->name('users-list')->middleware(['role:super-admin']);

Route::get('/admin/users/edit/{id}', [AdminController::class , 'userEdit'])->name('users-edit')->middleware(['role:super-admin']);

Route::post('/admin/users/update', [AdminController::class , 'userUpdate'])->name('users-update')->middleware(['role:super-admin']);

Route::get('/admin/users/delete/{id}', [AdminController::class , 'userDelete'])->name('users-delete')->middleware(['role:super-admin']);

Route::get('/admin/users/register', [AdminController::class , 'userRegister'])->name('users-register')->middleware(['role:super-admin']);

Route::post('/admin/users/insert', [AdminController::class , 'userInsert'])->name('users-insert')->middleware(['role:super-admin']);

Route::get('/admin/invoice/list', [AdminController::class , 'invoiceList'])->name('invoice-list')->middleware(['role:super-admin']);

Route::get('/admin/invoice/delete/{id}', [AdminController::class , 'invoiceDelete'])->name('invoice-delete')->middleware(['role:super-admin']);

Route::get('/admin/role/list', [AdminController::class , 'roleList'])->name('role-list')->middleware(['role:super-admin']);

Route::get('/admin/role/create', [AdminController::class , 'roleCreate'])->name('role-create')->middleware(['role:super-admin']);

Route::post('/admin/role/insert', [AdminController::class , 'roleInsert'])->name('role-insert')->middleware(['role:super-admin']);

Route::get('/admin/role/delete/{id}/{role}', [AdminController::class , 'roleDelete'])->name('role-delete')->middleware(['role:super-admin']);

Auth::routes();

Route::get('/logout', [LogoutController::class , 'logout'])->name('logout');