<?php

namespace App\Http\Controllers;

use App\Models\brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsContreller extends Controller
{
    function index(Request $request)
    {
        $category = $request->get('category');

        $query = Product::orderBy('id', 'desc');

        if ($category) {
            $query->where('category_id', $category);
        }

        return view('products.index', [
            'products' => $query->paginate(30),
            'categories' => Category::all(),
            'selectedCategory' => $category
        ]);
    }

    function detail($id, $category = null)
    {

        if ($category != null) {
            return view('products.detail', ['id' => $id, 'category' => $category]);
        } else {
            return view('products.detail', ['id' => $id, 'category' => ""]);
        }
    }

    function create()
    {

        $brands = brand::all();
        $categories = Category::all();

        return view(
            'products.create',
            [
                'brands' => $brands,
                'categories' => $categories
            ]
        );
    }

    function store(Request $request)
    {
        request()->validate([
            'productName' => 'required|string|max:250',
            'productDescription' => 'required|string',
            'productPrice' => 'required|numeric|min:0|max:999999.99',
            'productBrand' => 'required|exists:brands,id',
            'productCategory' => 'required|exists:categories,id'
        ]);

        $product = new Product();
        $product->name = $request->get('productName');
        $product->description = $request->get('productDescription');
        $product->price = $request->get('productPrice');
        $product->brand_id = $request->get('productBrand');
        $product->category_id = $request->get('productCategory');

        $product->save();

        return redirect()->route('admin.products.table');
    }
    public function table()
    {
        $products = Product::orderBy('id', 'desc')->paginate(10);
        return view('products.table', ['products' => $products]);
    }
    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('admin.products.table')
            ->with('success', 'Producto eliminado correctamente.');
    }
}
