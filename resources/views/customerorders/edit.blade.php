@extends('layouts.app')

@section('content')
    <h1>CustomerOrders Create</h1>
    {!! Form::open(['action'=> ['CustomerOrdersController@update', $order->id], 'method' => 'PUT']) !!}
        <div class="form-group">
            {{Form::label('fromAdd', 'From Address')}}
            {{Form::text('fromAdd', $order->fromAdd, ['class'=>'form-control', 'placeholder'=>'In put the pickup Address'])}}
        </div>
        <div class="form-group">
            {{Form::label('toAdd', 'To Address')}}
            {{Form::text('toAdd', $order->toAdd, ['class'=>'form-control', 'placeholder'=>'In put the delivered Address'])}}
        </div>
        <div class="form-group">
            {{Form::label('time', 'Time descriptions')}}
            {{Form::text('time', $order->time, ['class'=>'form-control', 'placeholder'=>'In put the time and descriptions (Ex: 8pm at front of my house,...)'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection
