<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Size;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Categori;
use App\Models\SubCategory;
use App\Http\Requests\ProductStoreRequest;
use App\Models\Color;

class ProductController extends Controller
{
    public function product()
    {
        $this->authorize('product');
        $products = Product::with('category', 'subcategory', 'brand', 'tag', 'size', 'color')->orderBy('id', 'DESC')->get();
        return view('backend_pages.product.productlist', compact('products'));
    }

    public function view($id)
    {
        $product = Product::findOrFail($id);
        return view('backend_pages.product.product_view', ['product' => $product]);
    }

    public function create()
    {
        $categories = Categori::all();
        $subcategories = SubCategory::all();
        $brands = Brand::all();
        $tags = Tag::all();
        $sizes = Size::all();
        $colors = Color::all();
        return view('backend_pages.product.create', compact('categories', 'subcategories', 'brands', 'tags', 'sizes', 'colors'));
    }

    public function store(ProductStoreRequest $request)
    {
        
        $images = array();
        if ($files = $request->file('images')) {
            foreach ($files as $file) {
                $name = $file->getClientOriginalName();
                $file->move('product image', $name);
                $images[] = $name;
            }
        }
        Product::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'sub_category_id' => $request->sub_category_id,
            'brand_id' => $request->brand_id,
            'tag_id' => $request->tag_id,
            'size_id' => $request->size_id,
            'color_id' => $request->color_id,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'details' => $request->details,
            'images' =>  implode("|", $images),


        ]);




        return redirect()->route('product.list')->with('message', 'Successfully New Product Add');
    }

    public function edit($productid)
    {

        $categories = Categori::all();
        $subcategories = SubCategory::all();
        $brands = Brand::all();
        $tags = Tag::all();
        $sizes = Size::all();
        $colors = Color::all();
        $product = Product::find($productid);
        if ($product) {
            return view('backend_pages.product.product_edit', compact('categories', 'product', 'subcategories', 'brands', 'tags', 'sizes', 'colors'));
        } else {
            return redirect()->back();
        }
    }
    public function update(ProductStoreRequest $request, $productid)
    {

        $product = Product::find($productid);


        $product->update([
            'name' => $request->name,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'details' => $request->details,
            'category_id' => $request->category_id,
            'sub_category_id' => $request->sub_category_id,
            'brand_id' => $request->brand_id,
            'tag_id' => $request->tag_id,
            'size_id' => $request->size_id,
            'color_id' => $request->color_id,


        ]);
        return redirect()->route('product.list')->with('message', 'Successfully Update New Product');
    }

    public function destroy($id)
    {

        $product = Product::find($id);
        if ($product) {
            $product->delete();
            return redirect()->route('product.list')->with('message', 'Delete Successfully');
        } else {
            return redirect()->back();
        }
    }
}
