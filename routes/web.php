<?php

use App\Http\Controllers\ProductCategorieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('dashboard', \App\Http\Controllers\DashboardController::class);
Route::resource('productcategories', \App\Http\Controllers\ProductCategorieController::class);

Route::get('/productcategories/create', [ProductCategorieController::class, 'create'])->name('productcategories.create');
Route::post('/productcategories', [ProductCategorieController::class, 'store'])->name('productcategories.store');
Route::delete('/productcategories/{id}', [ProductCategorieController::class, 'destroy'])->name('productcategories.destroy');
Route::get('/productcategories/{id}/edit', [ProductCategorieController::class, 'edit'])->name('productcategories.edit');
Route::put('/productcategories/{id}', [ProductCategorieController::class, 'update'])->name('productcategories.update');

