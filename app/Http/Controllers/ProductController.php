<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;



class ProductController extends Controller
{
    public function index()
    {
        $ProductList = Product::limit(10)->get();

        return view('product.index', ['misProductos' => $ProductList]);
    }

    public function create()
    {
        $categorylist = Category::all();

        return view('product.create',
         ['categorylist' => $categorylist]);
    }

    public function show(Product $product)
    {
        return view('product.show', ['producto' => $product]);
    }

    public function store(Request $request)
    {
    //VALIDATION
        $request->validate([
            'nombre' => 'required|min=3|max=250',
            'description' => 'required',
            'precio' => 'required|numeric',
            'categoria' => 'required|exists:categories,id',
            'imagen' => 'required|image'
        ]);

    dd($request->all());

        $nameProduct = new Product();
        $nameProduct->name = $request->get('name');
        $nameProduct->description = $request->get('description');
        $nameProduct->price = $request->get('price');
        $nameProduct->category_id = $request->get('categoria');

        if($request->hasFile('imagen')) {
            $ruta = $request->file('imagen')->store('images', 'public');
            $nameProduct->image = $ruta;
        }



        $nameProduct->save();

        echo "Producto creado correctamente";
}

public function destroy(Product $product)
{
    $product->delete();

    return redirect()->route('product.index');
}
}