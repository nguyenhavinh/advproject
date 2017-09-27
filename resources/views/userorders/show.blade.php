@extends('layouts.app')

@section('content')    
    <h1>Detail for Order ID: {{$order->id}}</h1>
    
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
                <th scope="row">By Driver ID</th>
                <td>{{$order->driver_id}}</td>
            </tr>
        </tbody>
    </table>
    <hr>
    <p> 
        <a href="/userorders" class="btn btn-default">Go Back</a>
        <a href="/userorders/{{$order->id}}/edit" class="btn btn-default">Edit</a>
    </p>
        {!!Form::open(['action' => ['UserOrdersController@destroy', $order->id], 'method'=> 'POST'])!!}
            {{Form::hidden('_method', 'DELETE' )}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}

@endsection
