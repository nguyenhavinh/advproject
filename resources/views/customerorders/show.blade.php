@extends('layouts.app')

@section('content')
    <h1>{{$order->id}}</h1>
    <h3>{{$order->time}}</h3>
    <hr>
    <a href="/customerorders" class="btn btn-default">Go Back</a>
@endsection
