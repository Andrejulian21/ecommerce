<?php

use App\Http\Controllers\ProductsContreller;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductsContreller::class, 'index']);
Route::get('products/{id}/{category?}', [ ProductsContreller::class,'detail']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;

Route::prefix('admin')->controller()->group(function(){
    Route::get('/', [AdminController::class,'index'])->name('admin.index');
    Route::get('/categories',[ CategoryController::class,'create'])->name('admin.categories.create');
    Route::post('/categories/store',[ CategoryController::class,'store'])->name('admin.categories.store');

    
    Route::get('products/create', [ ProductsContreller::class,'create'])->name('admin.products.create');
    Route::post('products/store', [ ProductsContreller::class,'store'])->name('admin.products.store');
});
