<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Models\Customer;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('shop/home');
})->name('shop.home');

Route::get('/login', function () {
    return view('login');
})->name('user.login');

Route::post('/login', [CustomerController::class, 'checkLogin'])->name('user.checkLogin');

Route::get('/logout', [CustomerController::class, 'Logout'])->name('user.logout');

Route::get('/Sign In', function () {
    return view('signIn');
})->name('user.signIn');

Route::prefix('/user')->group(function () {
    Route::post('/store', [CustomerController::class, 'store'])->name('user.store');
    Route::get('/store', [CustomerController::class, 'index'])->name('user.list');
});

Route::get('/product/list', [ProductController::class, 'index'])->name('product.list');

Route::prefix('/product')->group(function () {
    Route::post('/store', [ProductController::class, 'store'])->name('product.store');
    Route::post('/update', [ProductController::class, 'update'])->name('product.update');
    Route::get('/create', [ProductController::class, 'create'])->name('product.create');
    Route::get('{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
});

Route::prefix('/categories')->group(function(){
    Route::get('/list', [CategoryController::class,'index'])->name('categories.list');
    Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/store', [CategoryController::class, 'store'])->name('categories.store');
});
