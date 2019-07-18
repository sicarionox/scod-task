@extends('layout')

@section('content')
    <style>

    </style>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">
        <div class="col-sm-12 col-lg-8 offset-lg-2">
            <h1 style="text-align: center; padding: 30px;">Create new task</h1>
            <form method="post" action="{{route('tasks.store')}}">
                <div class="form-group">
                    @csrf
                    <label for="task">Task content:</label>
                    <input type="text" class="form-control" name="task"/>
                </div>
                <button type="submit" class="btn btn-dark">Create Task</button>
            </form>
        </div>
    </div>


@endsection