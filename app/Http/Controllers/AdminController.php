<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Customer;
use App\User;
use App\Driver;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('ID','desc')->paginate(5);
        $customers = Customer::orderBy('ID','desc')->paginate(5);
        $drivers = Driver::orderBy('ID','desc')->paginate(5);
        
        return view('admin.index')
                                    ->with('users', $users)
                                    ->with('customers', $customers)
                                    ->with('drivers', $drivers);
    }
    public function destroyUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->intended(route('admin.dashboard'))->with('success', 'User Deleted');
    }
    public function showUser($id)
    {
        $user = User::find($id);
        return view('Admin.editUser')->with('user', $user);
    }
    public function updateUser(request $request, $id)
    {        
        // Create new order
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phoneNumber = $request->input('phoneNumber');       
        $user->save();
        return redirect()->intended(route('admin.dashboard'))->with('success', 'Customer Updated');
    }
    public function destroyCustomer($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect()->intended(route('admin.dashboard'))->with('success', 'Customer Deleted');
    }
    public function showCustomer($id)
    {
        $customer = Customer::find($id);
        return view('Admin.editCustomer')->with('customer', $customer);
    }
    public function updateCustomer(request $request, $id)
    {        
        // Create new order
        $customer = Customer::find($id);
        $customer->name = $request->input('name');
        $customer->address = $request->input('address');
        $customer->email = $request->input('email');
        $customer->phoneNumber = $request->input('phoneNumber');       
        $customer->save();
        return redirect()->intended(route('admin.dashboard'))->with('success', 'Customer Updated');
    }
    public function destroyDriver($id)
    {
        $driver = Driver::find($id);
        $driver->delete();
        return redirect()->intended(route('admin.dashboard'))->with('success', 'Driver Deleted');
    }
    public function showDriver($id)
    {
        $driver = Driver::find($id);
        return view('Admin.editDriver')->with('driver', $driver);
    }
    public function updateDriver(request $request, $id)
    {        
        // Create new order
        $driver = Driver::find($id);
        $driver->name = $request->input('name');
        $driver->driverProof = $request->input('driverProof');
        $driver->address = $request->input('address');
        $driver->email = $request->input('email');
        $driver->phoneNumber = $request->input('phoneNumber');       
        $driver->save();
        return redirect()->intended(route('admin.dashboard'))->with('success', 'Driver Updated');
    }
}
