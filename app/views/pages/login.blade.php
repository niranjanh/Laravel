@extends('layouts.html')


@section('htmlContent')
    <div>
            <h1>Welcome <h1>
        <h4>Log Into Application <h4>
        <hr>
        <form method="get" action="/userLogin">
            Email : <input label="email" name="email" type="text" placeholder="email">
            {{-- Password : <input label="password" type="password" placeholder="password"> --}}
            <br>
            <a  href="/userLogin">
                <button class="btn-primary" name="login" value="Login">
                    Login
                </button>
            </a>
        </form>
    </div>    
@endsection