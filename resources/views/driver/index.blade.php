@extends('layouts.app')

@section('content')    
    <h1>Hello {{$driver_name}}!</h1>
    <hr>
    <h2>Restaurant Orders</h2>
    @if(count($customer_orders)>0)
        <table class="table">
            <tr>
                <th>ORDER ID</th>
                <th>FROM ADDRESS</th>                
                <th>DESTINATION</th>
                <th>INSTRUCTIONS</th>
                <th>OPERATION FUNCTIONS</th>
            </tr>
            @foreach($customer_orders as $customer_order)
            <tr>
                <td>{{$customer_order->id}}</td>
                <td>{{$customer_order->fromAdd}}</td>                
                <td>{{$customer_order->toAdd}}</td>
                <td>{{$customer_order->time}}</td>                
                <td>                    
                    <div>
                    <a href="/driver/showCusOrder/{{$customer_order->id}}" class="btn btn-default center-block">Detail</a>
                    </div>
                </td>
            </tr>        
            @endforeach 
            </table>        
    @else
        <p class = "well">No orders found</p>
    @endif
    <hr>
    <h2>User Orders</h2>
    @if(count($user_orders)>0)
        <table class="table">
            <tr>
                <th>ORDER ID</th>
                <th>FROM ADDRESS</th>                
                <th>DESTINATION</th>
                <th>INSTRUCTIONS</th>
                <th>OPERATION FUNCTIONS</th>
            </tr>
            @foreach($user_orders as $user_order)
            <tr>
                <td>{{$user_order->id}}</td>
                <td>{{$user_order->fromAdd}}</td>                
                <td>{{$user_order->toAdd}}</td>
                <td>{{$user_order->time}}</td>                
                <td>                    
                    <div>
                    <a href="/driver/showUseOrder/{{$user_order->id}}" class="btn btn-default center-block">Detail</a>
                    </div>
                </td>
            </tr>        
            @endforeach 
            </table>        
    @else
        <p class = "well">No orders found</p>
    @endif
@endsection
