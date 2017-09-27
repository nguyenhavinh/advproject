<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomerOrder;
use DB;
use Auth;
class CustomerOrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:customer');
    }

    public function index()
    {
        // $orders = CustomerOrder::orderBy('created_at','desc')->get();
        // return Post::where('title', 'Post Two')->take(1)->get();
        // $posts = DB::select('SELECT * FROM posts');
        //$driver = DB::select('SELECT drivers.id, COUNT(customer_orders.driver_id) FROM drivers LEFT JOIN customer_orders ON drivers.id = customer_orders.driver_id 
                                //ORDER BY COUNT(customer_orders.driver_id) ASC LIMIT 1');
        
        
        //return $driver[0]->id;
        $customer_id = Auth()->user()->id;
        $customer_name = Auth()->user()->name;
        $orders = CustomerOrder::where('customer_id', $customer_id)->orderBy('created_at','desc')->paginate(5);
        //$orders = DB::select('SELECT * FROM `customer_orders` WHERE customer_id = 1 ORDER BY created_at DESC');
        return view('customerorders.index')->with('orders', $orders)->with('customer_name', $customer_name);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('customerorders.create');
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
        // Create new order
        $customer_id = Auth()->user()->id;
        $driver = DB::select('SELECT drivers.id, COUNT(customer_orders.driver_id) FROM drivers LEFT JOIN customer_orders ON drivers.id = customer_orders.driver_id 
                                ORDER BY COUNT(customer_orders.driver_id) ASC LIMIT 1');

        $driver_id = $driver[0]->id;
        $order = new CustomerOrder;
        $order->fromAdd = $request->input('fromAdd');
        $order->toAdd = $request->input('toAdd');
        $order->time = $request->input('time');
        $order->customer_id = $customer_id;
        $order->driver_id = $driver_id;
        $order->save();

        return redirect('/customerorders')->with('success', 'Order Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = CustomerOrder::find($id);
        return view('customerorders.show')->with('order', $order);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = CustomerOrder::find($id);
        return view('customerorders.edit')->with('order', $order);
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
        $order = CustomerOrder::find($id);
        $order->fromAdd = $request->input('fromAdd');
        $order->toAdd = $request->input('toAdd');
        $order->time = $request->input('time');
        $order->save();

        return redirect('/customerorders')->with('success', 'Order Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = CustomerOrder::find($id);
        $order->delete();
        return redirect()->route('customer.dashboard')->with('success', 'Order Removed');
    }
}
