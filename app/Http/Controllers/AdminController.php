<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class AdminController extends Controller
{
    public function index()
    {
        $totalProducts = Product::count();
        $totalCategories = Category::count();
        $recentProducts = Product::latest()->limit(5)->get();

        return view('admin.dashboard', compact('totalProducts', 'totalCategories', 'recentProducts'));
    }

    public function products()
    {
        $products = Product::all();
        return view('admin.products', compact('products'));
    }
}
