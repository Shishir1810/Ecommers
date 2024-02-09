<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Categori;
use App\Models\SubCategory;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{

    public function website()
    {
        $abouts = About::all();
        $categories = Categori::all();
        $Products = Product::latest()->limit(12)->get();
        return view('frontend_pages.website', compact('categories', 'Products', 'abouts'));
    }

    public function productview($id)
    {

        $products = Product::findorFail($id);
        $cat_id = $products->category_id;
        $related_product = Product::where('category_id', $cat_id)->limit(4)->get();
        return view('frontend_pages.productview', compact('products', 'related_product'));
    }

    public function allproduct($id)
    {

        $subcategories = SubCategory::where('category_id', $id)->get();
        $brands = Brand::where('sub_category_id', $id)->get();
        $products = Product::where('category_id', $id)->limit(12)->get();
        return view('frontend_pages.allproduct', compact('subcategories', 'brands', 'products'));
    }


    public function allproductsubcate($id)
    {
        $categories = Categori::all();
        $brands = Brand::where('sub_category_id', $id)->get();
        $products = Product::where('sub_category_id', $id)->limit(12)->get();

        return view('frontend_pages.allproductsubcate', compact('categories', 'brands', 'products'));
    }


    public function allproductbrand($id)
    {
        $categories = Categori::all();
        $subcategories = SubCategory::all();
        $products = Product::where('brand_id', $id)->limit(12)->get();
        return view('frontend_pages.allproductbrand', compact('categories', 'subcategories', 'products'));
    }
}
