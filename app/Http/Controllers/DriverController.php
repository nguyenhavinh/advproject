<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomerOrder;
use App\UserOrder;
use DB;

class DriverController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:driver');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $driver_id = auth()->user()->id;
        $driver_name = auth()->user()->name;
        $customer_orders = CustomerOrder::where('driver_id', $driver_id)->orderBy('created_at','desc')->paginate(5);
        $user_orders = UserOrder::where('driver_id', $driver_id)->orderBy('created_at','desc')->paginate(5);
        return view('driver.index')->with('driver_name', $driver_name)->with('customer_orders', $customer_orders)->with('user_orders', $user_orders);
    }
    public function showCus($id)
    {
        $order = CustomerOrder::find($id);
        return view('driver.showCusOrder')->with('order', $order);
    }
    public function showUse($id)
    {
        $order = UserOrder::find($id);
        return view('driver.showUseOrder')->with('order', $order);
    }
}
