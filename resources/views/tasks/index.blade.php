@extends('layout')

@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif

    <div class="row">
        <div class="col-lg-8 col-sm-12 offset-lg-2">
            <h1 class="align-self-center" style="text-align: center; padding: 30px;">To-do list</h1>
            <a href="{{route('tasks.create')}}" ><button class="btn btn-dark" style="margin: 20px 0;"> Create new task</button></a>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <td>Task</td>
                        <td>Done?</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tasks as $task)
                        <tr>
                            <td>{{$task->task}}</td>
                            @if($task->done == false)
                                <td>no</td>
                            @else
                                <td>yes</td>
                            @endif
                            <td>
                                <form action="{{route('tasks.edit', $task->id)}}" method="get">
                                    <button type="submit" class="btn btn-dark">edit</button>
                                </form>
                                <form action="{{route('tasks.destroy', $task->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-dark">delete</button>
                                </form>

{{--                                <a href="{{route('tasks.destroy', $task->id)}}" method="delete">delete</a>--}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection