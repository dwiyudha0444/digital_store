<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\client\HomeController;
use App\Http\Controllers\client\ShopController;
use App\Http\Controllers\client\OrderController;
use App\Http\Controllers\client\OrderFormController;
use App\Http\Controllers\client\ContactController;

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\DashboardController;

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
Route::resource('/contact',ContactController::class);

//payment-form
Route::get('/order',[OrderController::class,'index'])->middleware('auth');
Route::post('/checkout',[OrderController::class,'checkout'])->middleware('auth');
Route::get('/invoice/{id}',[OrderController::class,'invoice'])->middleware('auth');
Route::get('form-order/{id}',[OrderFormController::class,'edit'])->middleware('auth');


// Route::post('/invoice',[OrderController::class,'invoice']);

//admin
Route::resource('/dashboard',DashboardController::class)->middleware(['auth']);
Route::resource('/product',ProductController::class)->middleware(['auth']);
//admin-edit
Route::get('product-edit/{id}',[ProductController::class,'edit'])->middleware(['auth']);

//auth
Auth::routes();

Route::get('/home1', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
