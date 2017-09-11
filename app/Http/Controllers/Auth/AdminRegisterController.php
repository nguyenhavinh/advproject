<?php

namespace App\Http\Controllers\Auth;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminRegisterController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest:admin');
    }
    public function showRegisterForm()
    {
        return view('auth.adminregister');
    }
    
    public function register(Request $request)
    {       
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:6|confirmed',
        ]);
        $admin = new Admin;
        $admin->name = $request->input('name');
        $admin->email = $request->input('email');
        $admin->password = bcrypt($request->input('password'));
        $admin->save();        
        return redirect()->route('admin.dashboard');
    }
}
