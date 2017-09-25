@extends('layouts.app')

@section('content')
    <h1>Driver Edit</h1>
    {!! Form::open(['action'=> ['AdminController@updateDriver', $driver->id], 'method' => 'PUT']) !!}
        <div class="form-group">
            {{Form::label('name', 'DRIVER NAME')}}
            {{Form::text('name', $driver->name, ['class'=>'form-control', 'placeholder'=> '$driver->name'])}}
        </div>
        <div class="form-group">
            {{Form::label('driverProof', 'DRIVER PROOF')}}
            {{Form::text('driverProof', $driver->driverProof, ['class'=>'form-control', 'placeholder'=> '$driver->driverProof'])}}
        </div>
        <div class="form-group">
            {{Form::label('address', 'ADDRESS')}}
            {{Form::text('address', $driver->address, ['class'=>'form-control', 'placeholder'=> '$driver->address'])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'EMAIL ADDRESS')}}
            {{Form::text('email', $driver->email, ['class'=>'form-control', 'placeholder'=> '$driver->email'])}}
        </div>
        <div class="form-group">
            {{Form::label('phoneNumber', 'PHONE NUMBER')}}
            {{Form::text('phoneNumber', $driver->phoneNumber, ['class'=>'form-control', 'placeholder'=> '$driver->phoneNumber'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
    <a href="/admin" class="btn btn-default">Go Back</a>
@endsection
