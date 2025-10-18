<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function addproduct()
    {
        $category = Category::all();
        return view('vendor.add-product', compact('category'));
    }

    public function createproduct(Request $request)
    {
        $request->validate([
            'p_name' => 'required',
            'p_price' => 'required',
            'c_id' => 'required',
            'p_stock' => 'required',
            'p_description' => 'required',
            'p_image' => 'required'
        ]);

        Product::create([
            'v_id' => session('vendorId'),
            'p_name' => $request->p_name,
            'p_price' => $request->p_price,
            'c_id' => $request->c_id,
            'p_stock' => $request->p_stock,
            'p_description' => $request->p_description,
            'p_image' =>  $request->file('p_image')->store('products', 'public'),
        ]);

        return redirect('vendor/add-product')->with('msg', 'Product created successfully.');
    }

    public function viewproduct()
    {
        $products = Product::all();
        return view('vendor.view-product', compact('products'));
    }

    public function editproduct($p_id)
    {
        $product = Product::find($p_id);
        $category = Category::all();
        return view('vendor.edit-product', compact('product', 'category'));
    }

    public function updateproduct(Request $request, $p_id){

        $product = Product::find($p_id);

        $image = $product->p_image;

        if($request->hasFile('p_image')) {
           $image = $request->file('p_image')->store('products', 'public');

        }

        $product->update([
            'p_name' => $request->p_name,
            'p_price' => $request->p_price,
            'c_id' => $request->c_id,
            'p_stock' => $request->p_stock,
            'p_description' => $request->p_description,
            'p_image' => $image ?? $product->p_image,
        ]);

        return redirect('vendor/view-product')->with('msg', 'Product Updated Successfully.');
    }
}
