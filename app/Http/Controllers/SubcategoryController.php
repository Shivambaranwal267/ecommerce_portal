<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;


class SubcategoryController extends Controller
{
    public function detail($category, $sub_category)
    {
        $subcat = Category::where("c_name", $sub_category)->first();

        // dd($sub_cat_id);

        // $products = Product::where('c_id', $sub_cat_id->c_id)->limit(4)->get();

        // return view('subcategory', compact('products','category','sub_category'));

        

        return view('subcategory', ['subcat' => $subcat]);
    }
}
