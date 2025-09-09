<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function () {
    return 'List products';
});

Route::get('/products/{id}/{category?}', function ($id, $category = null) {
    return 'Detail products' . $id . "with category: ". $category;
});
