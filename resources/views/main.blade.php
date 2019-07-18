@extends('layout')
@section('content')
    <div class="row">
        <div class="col-sm-12 col-lg-6 offset-lg-3">
            <h1 style="text-align: center; margin-top: 300px">To-do list for SCoding</h1>
            <h3 style="text-align:center;  text-decoration: underline"><a href="{{route('tasks.index')}}" style="color: black;">click here to open</a></h3>
        </div>
    </div>
@endsection