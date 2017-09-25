@extends('layouts.app')

@section('content')
    <h1>Admin Page</h1>
    <h2>Users information</h2>
    
    @if(count($users)>0)
        <table class="table">
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>PHONE NUMBER</th>
                <th>OPERATION FUNCTIONS</th>
            </tr>
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phoneNumber}}</td>
                <td>
                    <div style="float:left; margin:0; padding:0">
                    {!!Form::open(['action' => ['AdminController@destroyUser', $user->id], 'method'=> 'POST'])!!}
                        {{Form::hidden('_method', 'DELETE' )}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}
                    </div>
                    <div style="display: inline">
                    <a href="/admin/editUser/{{$user->id}}" class="btn btn-default">Edit</a>
                    </div>
                </td>
            </tr>        
        @endforeach 
        </table>               
    @else
        <p class="well">No User found</p>
    @endif

    <h2>Customers information</h2>

    @if(count($customers)>0)
        <table class="table">
            <tr>
                <th>ID</th>
                <th>NAME</th>
                
                <th>EMAIL</th>
                <th>PHONE NUMBER</th>
                <th>OPERATION FUNCTIONS</th>
            </tr>
            @foreach($customers as $customer)
            <tr>
                <td>{{$customer->id}}</td>
                <td>{{$customer->name}}</td>
                
                <td>{{$customer->email}}</td>
                <td>{{$customer->phoneNumber}}</td>
                <td>
                    <div style="float:left; margin:0; padding:0">
                    {!!Form::open(['action' => ['AdminController@destroyCustomer', $customer->id], 'method'=> 'POST'])!!}
                        {{Form::hidden('_method', 'DELETE' )}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}
                    </div>
                    <div style="display: inline">
                    <a href="/admin/editCustomer/{{$customer->id}}" class="btn btn-default">Edit</a>
                    </div>
                </td>
            </tr>        
            @endforeach 
        </table>          
    @else
        <p class="well">No Customer found</p>
    @endif

    <h2>Drivers information</h2>
    @if(count($drivers)>0)    
        <table class="table">
            <tr>
                <th>ID</th>
                <th>NAME</th>
                
                <th>EMAIL</th>
                <th>PHONE NUMBER</th>
                <th>OPERATION FUNCTIONS</th>
            </tr>
            @foreach($drivers as $driver)
            <tr>
                <td>{{$driver->id}}</td>
                <td>{{$driver->name}}</td>
                
                <td>{{$driver->email}}</td>
                <td>{{$driver->phoneNumber}}</td>
                <td>
                    <div style="float:left; margin:0; padding:0">
                    {!!Form::open(['action' => ['AdminController@destroyDriver', $driver->id], 'method'=> 'POST'])!!}
                        {{Form::hidden('_method', 'DELETE' )}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}
                    </div>
                    <div style="display: inline">
                    <a href="/admin/editDriver/{{$driver->id}}" class="btn btn-default">Edit</a>
                    </div>
                </td>
            </tr>        
        @endforeach 
        </table>
    @else
        <p class="well">No Driver found</p>
    @endif
@endsection
