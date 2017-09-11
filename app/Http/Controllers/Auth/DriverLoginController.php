<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class DriverLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:driver');
    }

    public function showLoginForm()
    {
        return view('auth.driverlogin');
    }

    public function login(Request $request)
    {
        
        if (Auth::guard('driver')->attempt(['email'=>$request->email, 'password'=>$request->password], $request->remember)){
            return redirect()->route('driver.dashboard');
        }
        return redirect()->back()->withInput($request->only('email', 'remember'));      
    }
    
}
