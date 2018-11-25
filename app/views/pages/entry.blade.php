@extends('layouts.html')


@section('htmlContent')
    <div>
            <h1>Welcome... <h1>
        
        <hr>
        
        <a href="/login">
            <button class="btn-primary" name="login"  value="Login">Login
            </button>
        </a>
        <a href="/register">
            <button class="btn-success" name="register"  value="Register">Register
            </button>
        </a>
    </div>    

@endsection