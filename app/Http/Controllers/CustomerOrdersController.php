<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomerOrder;
class CustomerOrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $orders = CustomerOrder::orderBy('created_at','desc')->get();
        $orders = CustomerOrder::orderBy('created_at','desc')->paginate(5);
        return view('customerorders.index')->with('orders', $orders);
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
        $order = new CustomerOrder;
        $order->fromAdd = $request->input('fromAdd');
        $order->toAdd = $request->input('toAdd');
        $order->time = $request->input('time');
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
        return redirect('/customerorders')->with('success', 'Order Removed');
    }
}
