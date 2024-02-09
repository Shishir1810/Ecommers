<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile()
    {
        return view('user.profile');
    }

    public function index()
    {

        $users = User::with('role')->get();
        return view('user.list', compact('users'));
    }


    public function role()
    {

        $roles = UserRole::all();
        return view('user.rolelist', compact('roles'));
    }


    public function edit($id)
    {
        $role = UserRole::all();
        $user = User::find($id);
        return view('user.edit', compact('user', 'role'));
    }

    public function update(Request $request, $id)
    {

        $user = User::find($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'usertype' => $request->role_id,


        ]);
        return redirect()->route('users.index')->with('message', 'Successfully Update New Product');
        // dd($request->all());
    }
}
