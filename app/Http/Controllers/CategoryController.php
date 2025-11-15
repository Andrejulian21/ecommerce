<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        return view('admin.categories.create');
    }
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required|string|max:250|unique:categories,name',
        ]);
        Category::create([
            'name' => $request->get('name'),
        ]);


        return redirect()->route('admin.categories.table');
    }
    public function table()
    {
        $categories = Category::orderBy('id', 'desc')->paginate(10);
        return view('admin.categories.table', ['categories' => $categories]);
    }
}
