<?php

use App\Http\Controllers\ProductsContreller;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductsContreller::class, 'index']);

Route::prefix('products')->controller(ProductsContreller::class)->group(function () {

    Route::get('/','index');

    Route::get('/create', 'create');

    Route::get('/{id}/{category?}',  'detail');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;

Route::prefix('admin')->controller()->group(function(){
    Route::get('/', [AdminController::class,'index'])->name('admin.index');
    Route::get('/categories',[ CategoryController::class,'create'])->name('admin.categories.create');
});
