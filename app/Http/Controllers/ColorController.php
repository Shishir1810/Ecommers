<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
  public function index(){
  $color=Color::all();
  return view('backend_pages.color.list',compact('color'));
  }

  public function create(){
    return view('backend_pages.color.create');
  }

  public function store (Request $request){
    $request->validate([
        'color'=> 'required|max:15|unique:colors,color,except,id',
    ]);

    Color::create([
        'color'=>$request->color,
        'code'=>$request->code,
        'status' => $request->status ?? false
    ]);
    return redirect()->route('colors.index')->with('message','successfully create');
  }

  public function show(Color $color){
    return view ('backend_pages.color.view',compact('color'));
  }

  public function edit(Color $color){
    return view ('backend_pages.color.edit',compact('color'));
  }

  public function update(Request $request,Color $color ){
    $request->validate([
        'color'=> 'required|max:15',
    ]);
    $color->update([
        'color'=>$request->color,
        'code'=>$request->code,
        'status' => $request->status ?? false
    ]);
    return redirect()->route('colors.index')->with('message','successfully Update');
  }

  public function destroy(Color $color){
    if ($color) {
        $color->delete();
        return redirect()->route('colors.index')->with('message', 'Delete Successfully' );


    } else {
        return redirect()->back();
    }
  }

}
