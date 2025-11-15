<?php

namespace App\Http\Controllers;

use App\Models\brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
        public function create()
    {
        return view('admin.brands.create');
    }
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required|string|max:250|unique:brands,name',
        ]);
        brand::create([
            'name' => $request->get('name'),
        ]);


        return redirect()->route('admin.brands.table');
    }
    public function table()
    {
        $brands = brand::orderBy('id', 'desc')->paginate(10);
        return view('admin.brands.table', ['brands' => $brands]);
    }
}
