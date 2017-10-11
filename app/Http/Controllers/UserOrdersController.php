<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserOrder;
use DB;
use Auth;

class UserOrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
    {
        $this->middleware('auth:user');
    }
    public function index()
    {
        //        
        $user_id = Auth()->user()->id;
        $user_name = Auth()->user()->name;
        $orders = UserOrder::where('user_id', $user_id)->orderBy('created_at','desc')->paginate(5);
        //$orders = UserOrder::orderBy('created_at','desc')->paginate(5);
        //return view('userorders.index')->with('orders', $orders);
        return view('userorders.index')->with('orders', $orders)->with('user_name', $user_name);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('userorders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'fromAdd' => 'required',
            'toAdd' => 'required',
            'time' => 'required'
        ]);
        $user_id = Auth()->user()->id;
        $driver = DB::select('SELECT drivers.id, COUNT(user_orders.driver_id) FROM drivers LEFT JOIN user_orders ON drivers.id = user_orders.driver_id 
                                GROUP by drivers.id
                                ORDER BY COUNT(user_orders.driver_id) ASC LIMIT 1');
        $driver_id = $driver[0]->id;
        // Create new order

        $order = new UserOrder;
        $order->fromAdd = $request->input('fromAdd');
        $order->toAdd = $request->input('toAdd');
        $order->time = $request->input('time');
        $order->user_id = $user_id;
        $order->driver_id = $driver_id;
        $order->save();

        return redirect('/userorders')->with('success', 'Order Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = UserOrder::find($id);
        return view('userorders.show')->with('order', $order);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = UserOrder::find($id);
        return view('userorders.edit')->with('order', $order);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'fromAdd' => 'required',
            'toAdd' => 'required',
            'time' => 'required'
        ]);
        // Create new order
        $order = UserOrder::find($id);
        $order->fromAdd = $request->input('fromAdd');
        $order->toAdd = $request->input('toAdd');
        $order->time = $request->input('time');
        
        $order->save();

        return redirect('/userorders')->with('success', 'Order Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = UserOrder::find($id);
        $order->delete();
        return redirect()->route('user.dashboard')->with('success', 'Order Removed');
    }
}
