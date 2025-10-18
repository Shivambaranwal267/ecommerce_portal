<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;

class AdminCategoryController extends Controller
{


    public function addcategory()
    {
        return view('admin.add-category');
    }
    public function createcategory(Request $request)
    {
        $request->validate([
            'c_name' => 'required',
            'c_commission' => 'required',
        ]);

        Category::create([
            'c_name' => $request->c_name,
            'c_commission' => $request->c_commission,
        ]);

        return redirect('admin/add-category')->with('msg', 'Category added successfully.');
    }

    public function viewcategory()
    {
        $category = Category::all();
        return view('admin.view-category', compact('category'));
    }

    public function editcategory($c_id)
    {
        $category = Category::find($c_id);
        return view('admin.edit-category', compact('category'));
    }

    public function updatecategory(Request $request, $c_id)
    {
        $category = Category::find($c_id);

        $request->validate([
            'c_name' => 'required',
            'c_commission' => 'required',
        ]);

        $category->update([
            'c_name' => $request->c_name,
            'c_commission' => $request->c_commission,
        ]);


        return redirect('admin/view-category')->with('msg', 'Category updated successfully.');

    }

    public function deletecategory($c_id)
    {
        $category = Category::find($c_id);

        $category->delete();
        
        return redirect('admin/view-category')->with('msg', 'Category deleted successfully.');
    }
}
