<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\Component;

class AdminController extends Controller
{
    public function home(){
        $this->authorize('admin');
        return view('backend_pages.home');
    }
}
