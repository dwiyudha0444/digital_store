<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\client\HomeController;
use App\Http\Controllers\client\ShopController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//home
Route::resource('/home',HomeController::class);
Route::resource('/shop',ShopController::class);

//admin
Route::resource('/dashboard',AdminController::class);
Route::resource('/product',ProductController::class);
//admin-edit
Route::get('product-edit/{id}',[ProductController::class,'edit']);