<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class BrandController extends Controller
{
  public function index(){
   $brand= Brand::with('subcategory')->get();
    return view('backend_pages.brand.list',compact('brand'));
  }

  public function create(){
    $subcategories = SubCategory::all();
    return view ('backend_pages.brand.create',compact('subcategories'));
  }

  public function store(Request $request){

    $request->validate([
    'brand' =>'required|unique:brands|min:4|max:10',

]);

Brand::create([
    'brand'=>$request->brand,
    'sub_category_id' => $request->sub_category_id,
    'status' => $request->status ?? false
]);
return redirect()->route('brands.index')->with('message', 'Successfully Add');

  }

  public function edit(Brand $brand){
    $subcategories = SubCategory::all();
    return view ('backend_pages.brand.edit',compact('brand','subcategories'));
  }

  public function update(Request $request, Brand $brand){
    $request->validate([
        'brand' =>'required|min:4|max:10',

    ]);
     $brand->update([
        'brand'=>$request->brand,
        'sub_category_id' => $request->sub_category_id,
        'status' => $request->status ?? false
     ]);
     return redirect()->route('brands.index')->with('message', 'Successfully Update');
  }

  public function destroy(Brand $brand){
    if ($brand) {
        $brand->delete();
        return redirect()->route('brands.index')->with('message', 'Delete Successfully' );


    } else {
        return redirect()->back();
    }
  }
}
