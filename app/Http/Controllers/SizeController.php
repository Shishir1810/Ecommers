<?php

namespace App\Http\Controllers;


use App\Http\Requests\SizeRequest;

use App\Models\Size;

class SizeController extends Controller
{
    public function index()
    {
        $size = Size::all();
        return view('backend_pages.size.list', compact('size'));
    }

    public function create()
    {
        return view('backend_pages.size.create');
    }

    public function store(SizeRequest $request)
    {
        $request->validate([
            'name' => 'required|unique:sizes|max:255',

        ]);
        Size::create([
            'name' => $request->name,
            'status' => $request->status ?? false
        ]);
        return redirect()->route('sizes.index')->with('message', 'Successfully Add  New Size');
    }



    public function edit(Size $size)
    {
        return view('backend_pages.size.edit', compact('size'));
    }


    public function update(SizeRequest $request, Size $size)
    {
        $request->validate([
            'name' => 'required|max:255',

        ]);
        $size->update([
            'name' => $request->name,
            'status' => $request->status ?? false
        ]);
        return redirect()->route('sizes.index')->with('message', 'Successfully Update');
    }

    public function destroy(Size $size){
        if ($size) {
            $size->delete();
            return redirect()->route('sizes.index')->with('message', 'Delete Successfully' );


        } else {
            return redirect()->back();
        }
    }
}
