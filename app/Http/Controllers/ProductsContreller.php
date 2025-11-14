<?php

namespace App\Http\Controllers;

use App\Models\brand;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductsContreller extends Controller
{
    function index(){
        return view('products.index');
    }

    function detail($id, $category = null){

        if ($category != null) {
            return view('products.detail', ['id'=> $id, 'category'=>$category]);

        }else {
            return view('products.detail', ['id'=> $id, 'category'=>""]);
        }
    }

    function create()
    {

        $brands = brand::all();
        $categories = Category::all();

        return view('products.create',
            [
                'brands' => $brands,
                'categories' => $categories
            ]
        );
    }
}
