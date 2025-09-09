<?php

use App\Http\Controllers\ProductsContreller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('products')->controller(ProductsContreller::class)->group(function () {

    Route::get('/','index');

    Route::get('/create', 'create');

    Route::get('/{id}/{category?}',  'detail');
});
