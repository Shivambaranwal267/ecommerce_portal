<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class AdminBannerController extends Controller
{
    public function addbanner()
    {
        return view("admin.add-banner");
    }

    public function createbanner(Request $request)
    {
        $request->validate([
            'banner' => 'required',
            'alt' => 'required',
        ]);

        Banner::create([
            'b_image' => $request->file('banner')->store('banners', 'public'),
            'b_alt' => $request->alt,
        ]);

        return redirect('admin/add-banner')->with('msg', 'Banner added successfully.');
    }

    public function viewbanner()
    {
        // $category = Category::all();
        return view('admin.view-banner');
    }

    // public function editcategory($c_id)
    // {
    //     $category = Category::find($c_id);
    //     return view('admin.edit-category', compact('category'));
    // }

    // public function updatecategory(Request $request, $c_id)
    // {
    //     $category = Category::find($c_id);

    //     $request->validate([
    //         'c_name' => 'required',
    //         'c_commission' => 'required',
    //     ]);

    //     $category->update([
    //         'c_name' => $request->c_name,
    //         'c_commission' => $request->c_commission,
    //     ]);


    //     return redirect('admin/view-category')->with('msg', 'Category updated successfully.');
    // }

    // public function deletecategory($c_id)
    // {
    //     $category = Category::find($c_id);

    //     $category->delete();

    //     return redirect('admin/view-category')->with('msg', 'Category deleted successfully.');
    // }
}
