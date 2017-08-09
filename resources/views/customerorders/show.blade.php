@extends('layouts.app')

@section('content')    
    <h1>{{$order->id}}</h1>
    <div>
        <p><small>FROM {{$order->fromAdd}} TO {{$order->toAdd}} AT {{$order->time}}</small></p>
        <p><small>Place on {{$order->created_at}}</small></p>
    </div>    
    <hr>
    <p> 
        <a href="/customerorders" class="btn btn-default">Go Back</a>
        <a href="/customerorders/{{$order->id}}/edit" class="btn btn-default">Edit</a>
    </p>
        {!!Form::open(['action' => ['CustomerOrdersController@destroy', $order->id], 'method'=> 'POST'])!!}
            {{Form::hidden('_method', 'DELETE' )}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
    

@endsection
