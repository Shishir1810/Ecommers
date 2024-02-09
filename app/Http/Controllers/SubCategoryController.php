<?php

namespace App\Http\Controllers;

use App\Models\Categori;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{

    public function index()
    {
        $subcategory = SubCategory::with('subcategory')->get();
        return view(
            'backend_pages.subcategory.list',
            compact('subcategory')
        );
    }


    public function create()
    {
        $categories = Categori::all();
        return view('backend_pages.subcategory.create', compact('categories'));
    }


    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|min:4|unique:sub_categories',
            'details' => 'required|min:5|max:1000'
        ]);
        SubCategory::create(
            [
                'category_id' => $request->category_id,
                'name' => $request->name,
                'details' => $request->details,
                'status' => $request->status ?? false

            ]
        );
        return redirect()->route('sub_categories.index')->with('message', 'Successfully Added  New Sub category');
    }



    public function edit(SubCategory $subCategory)
    {
        $categories = Categori::all();
        return view('backend_pages.subcategory.edit', compact('categories', 'subCategory'));
    }


    public function update(Request $request, SubCategory $subCategory)
    {
        $request->validate([
            'name' => 'required|min:4',
            'details' => 'required|min:5|max:1000'
        ]);
        $subCategory->update(
            [
                'category_id' => $request->category_id,
                'name' => $request->name,
                'details' => $request->details,
                'status' => $request->status ?? false

            ]
        );
        return redirect()->route('sub_categories.index')->with('message', 'Successfully Update Sub category');
    }


    public function destroy(SubCategory $subCategory)
    {

        if ($subCategory) {
            $subCategory->delete();
            return redirect()->route('sub_categories.index')->with('message', 'Delete Successfully');
        } else {
            return redirect()->back();
        }
    }
}
