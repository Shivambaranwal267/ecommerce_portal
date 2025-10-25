<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch all banners
        $banners = Banner::all();

        // Fetch 4 products
        $products = Product::limit(4)->get();

        // Fetch latest 4 products
        $popular = Product::latest()->limit(4)->get();

        // Recently viewed products
        $recent = Product::latest()->limit(4)->get();

        // Fetch Electronics (c_id = 1)
        $electronics = Product::where('c_id', 1)->latest()->limit(4)->get();

        // Fetch categories if needed in home.blade.php
        $categories = Category::all();

        return view('home', compact('banners', 'products', 'popular', 'electronics', 'categories', 'recent'));
    }
}
