@extends('layouts.app')

@section('content')
    <h1>UserOrders Page</h1>
    @if(count($orders)>0)
        @foreach($orders as $order)
            <div class="well">
                <h4><a href="/userorders/{{$order->id}}">Order number: {{$order->id}}</a></h3>
                <p><small>FROM {{$order->fromAdd}} TO {{$order->toAdd}} AT {{$order->time}}</small></p>
                <p><small>Place on {{$order->created_at}}</small></p>
            </div>        
        @endforeach

        {{$orders->links()}}
    @else
        <p>No orders found</p>
    @endif
@endsection
