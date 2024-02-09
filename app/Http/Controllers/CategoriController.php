<?php

namespace App\Http\Controllers;

use App\Models\Categori;
use App\Http\Requests\CategoryRequest;
use Image;

class CategoriController extends Controller
{
    public function category()
    {
        $this->authorize('catagory');
        $categories = Categori::all();
        return view('backend_pages.category.categorylist',
         compact('categories'));
    }


    public function create()
    {
        return view('backend_pages.category.category_create');
    }


    public function store(CategoryRequest $request)
    {
        Categori::create(
            [
                'name' => $request->name,
                'details' => $request->details,
                'image' => $this->uploadImage($request->file('image')),
                'status' => $request->status ?? false

            ]
        );
        return redirect()->route('category.list')->with('message', 'Successfully Add  New category');
    }

    public function edit($categori)
    {

        $categori = Categori::find($categori);

        if ($categori) {

            return view('backend_pages.category.category_edit',
            compact('categori'));
        } else {
            return redirect()->back();
        }
    }

    public function update(CategoryRequest $request, $categoriesid)
    {
        $categori = Categori::find($categoriesid);
        if ($request->file('image')) {
            unlink(storage_path('app/public/categories/') . $categori->image);
        }

        $categori->update(
            [
                'name' => $request->name,
                'details' => $request->details,
                'image' => $this->uploadImage($request->file('image')) ?? $categori->image,
                'status' => $request->status ?? false

            ]
        );
        return redirect()->route('category.list')->with('message', 'Successfully Update New category');
    }

    public function destroy($categori)
    {
        $categori = Categori::find($categori);
        if ($categori->image && file_exists(storage_path('app/public/categories/' . $categori->image))) {
            unlink(storage_path('app/public/categories/' . $categori->image));
        }

        if ($categori) {
            $categori->delete();
            return redirect()->route('category.list')->with('message', 'Delete Successfully');
        } else {
            return redirect()->back();
        }
    }

    public function uploadImage($file = null)
    {
        if (is_null($file)) return $file;

        $fileName = date('dmY') . time() . '.' . $file->getClientOriginalExtension();
        Image::make($file)
            ->resize(300, 200)
            ->save(storage_path('app/public/categories/' . $fileName));
        return $fileName;
    }

}
