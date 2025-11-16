<?php

use App\Http\Controllers\ProductsContreller;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductsContreller::class, 'index']);
Route::get('products/{id}/{category?}', [ProductsContreller::class, 'detail']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;

Route::prefix('admin')->controller()->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');
    Route::post('/categories/store', [CategoryController::class, 'store'])->name('admin.categories.store');

    Route::get('/categories', [CategoryController::class, 'table'])->name('admin.categories.table');


    Route::get('products/create', [ProductsContreller::class, 'create'])->name('admin.products.create');
    Route::post('products/store', [ProductsContreller::class, 'store'])->name('admin.products.store');

    Route::get('products', [ProductsContreller::class, 'table'])->name('admin.products.table');

    Route::get('/brands/create', [BrandController::class, 'create'])->name('admin.brands.create');
    Route::post('/brands/store', [BrandController::class, 'store'])->name('admin.brands.store');

    Route::get('/brands', [BrandController::class, 'table'])->name('admin.brands.table');

    Route::delete('/categories/delete/{id}', [CategoryController::class, 'destroy'])->name('admin.categories.delete');

    Route::delete('/brands/delete/{id}', [BrandController::class, 'destroy'])->name('admin.brands.delete');

    Route::delete('/products/delete/{id}', [ProductsContreller::class, 'delete'])->name('admin.products.delete');
});
