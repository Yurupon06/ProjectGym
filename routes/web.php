<?php

use App\Http\Controllers\ProductCategorieController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductCategorieController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('dashboard', \App\Http\Controllers\DashboardController::class);
Route::resource('productcategories', \App\Http\Controllers\ProductCategorieController::class);

Route::resource('product', \App\Http\Controllers\ProductController::class);
Route::resource('member', \App\Http\Controllers\MemberController::class);
Route::resource('order', \App\Http\Controllers\OrderController::class);
Route::resource('payment', \App\Http\Controllers\PaymentController::class);
Route::resource('customer', \App\Http\Controllers\CustomerController::class);


Route::resource('users', UserController::class);

