@extends('layouts.welcome')


@section('welcomeContent')
    <h1>more Info Page with {{$id}} <br> id + 1 = {{$id + 1}}<h1>
        <a href="/sendId/{{$id}}">
            <button value="sendId" >Click to Send Id</button>
        </a>
@endsection