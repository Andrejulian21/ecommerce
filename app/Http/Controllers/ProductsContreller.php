<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsContreller extends Controller
{
    function index(){
        return 'List products';
    }

    function detail($id, $category = null){

        if ($category != null) {
            return 'Detail products' . $id . "with category: ". $category;
        }else {
            return 'Detail products' . $id;
        }

    }

    function create(){
        return "Form create product";
    }
}
