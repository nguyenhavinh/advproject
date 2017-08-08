@extends('layouts.app')

@section('content')
    <h1>CustomerOrders Page</h1>
    @if(count($orders)>0)
        @foreach($orders as $order)
            <div class="well">
                <h3><a href="/customerorders/{{$order->id}}">{{$order->id}}<a></h3>
                <small>Place on {{$order->created_at}}</small>
            </div>        
        @endforeach

        {{$orders->links()}}
    @else
        <p>No orders found</p>
    @endif
@endsection
