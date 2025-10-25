<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function detail($category)
    {

        // dd($category);

        $cat_id = Category::where('c_name', $category)->first();

        // dd($cat_id);

        $products = Product::where('c_id', $cat_id->c_id)->get();

        return view('category', compact('products','category'));
    }
}
