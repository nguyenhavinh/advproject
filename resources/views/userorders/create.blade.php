@extends('layouts.app')

@section('content')
    <h1>UserOrders Create</h1>
    {!! Form::open(['action'=> 'UserOrdersController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('fromAdd', 'From Address')}}
            {{Form::text('fromAdd', '', ['class'=>'form-control', 'placeholder'=>'In put the pickup Address'])}}
        </div>
        <div class="form-group">
            {{Form::label('toAdd', 'To Address')}}
            {{Form::text('toAdd', '', ['class'=>'form-control', 'placeholder'=>'In put the delivered Address'])}}
        </div>
        <div class="form-group">
            {{Form::label('time', 'Time descriptions')}}
            {{Form::text('time', '', ['class'=>'form-control', 'placeholder'=>'In put the time and descriptions (Ex: 8pm at front of my house,...)'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection
