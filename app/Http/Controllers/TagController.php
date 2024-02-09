<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
   public function index(){
          $tag=Tag::all();
    return view('backend_pages.tag.list',compact('tag'));
   }

   public function create(){
    return view('backend_pages.tag.create');
   }

   public function store(Request $request){
// dd($request->all());
    $request->validate([
        'tag' => 'required|unique:tags|max:255',

    ]);
    Tag::create([
        'tag'=>$request->tag,
        'status' => $request->status ?? false
    ]);
    return redirect()->route('tags.index')->with('message', 'Successfully Add  New Tag');
   }


   public function edit(Tag $tag){
    return view('backend_pages.tag.edit',compact('tag'));
   }

   public function update(Request $request, Tag $tag){
    $request->validate([
        'tag' => 'required|max:255',

    ]);
    $tag->update([
        'tag'=>$request->tag,
        'status' => $request->status ?? false
    ]);
    return redirect()->route('tags.index')->with('message', 'Successfully update');
   }

   public function destroy(Tag $tag){
    if ($tag) {
        $tag->delete();
        return redirect()->route('tags.index')->with('message', 'Delete Successfully' );


    } else {
        return redirect()->back();
    }
   }

}
