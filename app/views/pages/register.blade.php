@extends('layouts.html')


@section('htmlContent')
    <div>
        <h1>Login <h1>
        <hr>
        <form method="post" action="/saveInfo">
            Username : <input label="username" name="username" type="text" placeholder="username"><br>
            Email : <input label="email"  name="email" type="text" placeholder="email"><br>
            Role : <input label="role" name="role" type="text" placeholder="role"><br>
            
            <a  href="/saveInfo">
                <button class="btn btn-primary" name="register" value="Register">
                    Register
                </button>
            </a>
        </form>
    </div>    

@endsection