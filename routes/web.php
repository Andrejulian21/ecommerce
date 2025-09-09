<?php

use App\Http\Controllers\ProductsContreller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductsContreller::class, 'index']);

Route::get('/products/create', [ProductsContreller::class, 'create']);

Route::get('/products/{id}/{category?}', [ProductsContreller::class, 'detail']);

