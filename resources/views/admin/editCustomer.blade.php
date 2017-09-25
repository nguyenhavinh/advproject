@extends('layouts.app')

@section('content')
    <h1>Customer Edit</h1>
    {!! Form::open(['action'=> ['AdminController@updateCustomer', $customer->id], 'method' => 'PUT']) !!}
        <div class="form-group">
            {{Form::label('name', 'CUSTOMER NAME')}}
            {{Form::text('name', $customer->name, ['class'=>'form-control', 'placeholder'=>'$customer->name'])}}
        </div>
        <div class="form-group">
            {{Form::label('address', 'ADDRESS')}}
            {{Form::text('address', $customer->address, ['class'=>'form-control', 'placeholder'=>'$customer->address'])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'EMAIL ADDRESS')}}
            {{Form::text('email', $customer->email, ['class'=>'form-control', 'placeholder'=>'$customer->email'])}}
        </div>
        <div class="form-group">
            {{Form::label('phoneNumber', 'PHONE NUMBER')}}
            {{Form::text('phoneNumber', $customer->phoneNumber, ['class'=>'form-control', 'placeholder'=>'$customer->phoneNumber'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
    <a href="/admin" class="btn btn-default">Go Back</a>
@endsection
