@extends('layouts.welcome')


@section('welcomeContent')
    <h1>Id is trasferred to this page from more info page<h1>
       <br>
       this is id * 10 = {{$id * 10}}
@endsection