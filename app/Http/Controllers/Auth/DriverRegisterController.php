<?php

namespace App\Http\Controllers\Auth;

use App\Driver;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DriverRegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:driver');
    }
    public function showRegisterForm()
    {
        return view('auth.driverregister');
    }
    
    public function register(Request $request)
    {       
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:drivers',
            'driverproof' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phonenumber' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);
        $driver = new Driver;
        $driver->name = $request->input('name');
        $driver->email = $request->input('email');
        $driver->driverproof = $request->input('driverproof');
        $driver->address = $request->input('address');
        $driver->phonenumber = $request->input('phonenumber');
        $driver->password = bcrypt($request->input('password'));
        $driver->save();        
        return redirect()->route('driver.dashboard');
    }
}
