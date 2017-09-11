@extends('layouts.app')

@section('content')
    <h1>User Page</h1>
    <h1>{{Auth::user()->id}}</h1>
@endsection
