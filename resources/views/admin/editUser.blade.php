@extends('layouts.app')

@section('content')
    <h1>User Edit</h1>
    {!! Form::open(['action'=> ['AdminController@updateUser', $user->id], 'method' => 'PUT']) !!}
        <div class="form-group">
            {{Form::label('name', 'USER NAME')}}
            {{Form::text('name', $user->name, ['class'=>'form-control', 'placeholder'=>'$user->name'])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'EMAIL ADDRESS')}}
            {{Form::text('email', $user->email, ['class'=>'form-control', 'placeholder'=>'$user->email'])}}
        </div>
        <div class="form-group">
            {{Form::label('phoneNumber', 'PHONE NUMBER')}}
            {{Form::text('phoneNumber', $user->phoneNumber, ['class'=>'form-control', 'placeholder'=>'$user->phoneNumber'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
    <a href="/admin" class="btn btn-default">Go Back</a>
@endsection
