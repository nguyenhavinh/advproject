<?php

namespace App\Http\Controllers\Auth;

use App\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerRegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:customer');
    }
    public function showRegisterForm()
    {
        return view('auth.customerregister');
    }
    
    public function register(Request $request)
    {       
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:drivers',            
            'address' => 'required|string|max:255',
            'phonenumber' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);
        $customer = new Customer;
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');        
        $customer->address = $request->input('address');
        $customer->phonenumber = $request->input('phonenumber');
        $customer->password = bcrypt($request->input('password'));
        $customer->save();        
        return redirect()->route('customer.dashboard');
    }
}
