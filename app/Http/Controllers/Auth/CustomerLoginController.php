<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class CustomerLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:customer');
    }

    public function showLoginForm()
    {
        return view('auth.customerlogin');
    }

    public function login(Request $request)
    {
        
        if (Auth::guard('customer')->attempt(['email'=>$request->email, 'password'=>$request->password], $request->remember)){
            return redirect()->route('customer.dashboard');
        }
        return redirect()->back()->withInput($request->only('email', 'remember'));      
    }
}
