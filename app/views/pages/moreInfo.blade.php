@extends('layouts.html')


@section('htmlContent')
    <div>
    <h1>Login <h1>
        <hr>
        {{-- @foreach($results as $result) --}}
            <label label="username">Name : {{$results->username}}</label><br>
            <label label="email">Email :  {{$results->email}}</label><br>
            <label label="role">Role : {{$results->role}}</label><br>
        {{-- @endforeach --}}
        <a href="/entry" >
            <button class="btn btn-primary" name="back" value="Logout">
                LogOut
            </button>
        </a>
    </div>    

@endsection