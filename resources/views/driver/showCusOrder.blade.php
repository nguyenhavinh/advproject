@extends('layouts.app')

@section('content')    
    <h1>Detail for Restaurant Order ID: {{$order->id}}</h1>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Attribute</th>
                <th>Details</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">From Address</th>
                <td>{{$order->fromAdd}}</td>
            </tr>
            <tr>
                <th scope="row">Destination</th>
                <td>{{$order->toAdd}}</td>                
            </tr>
            <tr>
                <th scope="row">Instructions</th>
                <td>{{$order->time}}</td>
            </tr>
            <tr>
                <th scope="row">Created At</th>
                <td>{{$order->created_at}}</td>
            </tr>
            <tr>
                <th scope="row">By Restaurant ID</th>
                <td>{{$order->customer_id}}</td>
            </tr>
        </tbody>
    </table>
    <hr>
    <p> 
        <a href="/driver" class="btn btn-default">Go Back</a>        
    </p>
@endsection
