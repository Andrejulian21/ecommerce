<?php

use App\Http\Controllers\ProductsContreller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('products')->controller(ProductsContreller::class)->group(function () {

    Route::get('/products', 'index');

    Route::get('/products/create', 'create');

    Route::get('/products/{id}/{category?}',  'detail');
});
