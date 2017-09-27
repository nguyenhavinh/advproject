@extends('layouts.app')

@section('content')
    <h1>CustomerOrders Page</h1>
    <h2>Hello {{$customer_name}}!</h2>
    @if(count($orders)>0)
        <table class="table">
            <tr>
                <th>ORDER ID</th>
                <th>FROM ADDRESS</th>                
                <th>DESTINATION</th>
                <th>INSTRUCTIONS</th>
                <th>OPERATION FUNCTIONS</th>
            </tr>
            @foreach($orders as $order)
            <tr>
                <td>{{$order->id}}</td>
                <td>{{$order->fromAdd}}</td>                
                <td>{{$order->toAdd}}</td>
                <td>{{$order->time}}</td>                
                <td>                    
                    <div>
                    <a href="/customerorders/{{$order->id}}" class="btn btn-default center-block">Detail</a>
                    </div>
                </td>
            </tr>        
            @endforeach 
            </table>        
    @else
        <p class = "well">No orders found</p>
    @endif
    <hr>
    <div>
        <a href="/customerorders/create" class="btn btn-default">CREATE NEW ORDER</a>
    </div>
@endsection
