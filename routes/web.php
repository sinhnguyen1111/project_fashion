<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('admin', function () {
    return view('backend.dashboard');
});
//Product//
Route::get('admin/product/index',[App\Http\Controllers\Backend\ProductController::class,'index'])->name('product.index');
Route::get('admin/product/create',[App\Http\Controllers\Backend\Product::class,'create'])->name('product.create');

///Users
Route::get('admin/user/create',[App\Http\Controllers\Frontend\UserController::class,'create'])->name('user.create');
Route::get('admin/user/index',[App\Http\Controllers\Frontend\UserController::class,'index'])->name('user.index');

//Category
Route::get('admin/category/index',[App\Http\Controllers\Backend\CategoryController::class,'index'])->name('category.index');


Route::get('/',[App\Http\Controllers\Frontend\HomeController::class,'index'])->name('home.index');
Route::get('/about_us',[App\Http\Controllers\Frontend\AboutController::class,'index'])->name('about.index');
Route::get('/product',[App\Http\Controllers\Frontend\ProductController::class,'index'])->name('product.index');
Route::get('/contact',[App\Http\Controllers\Frontend\ContactController::class,'index'])->name('contact.index');