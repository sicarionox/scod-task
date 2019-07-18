@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-6 offset-lg-3 col-sm-12">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row">
                <div class="col-sm-12 col-lg-8 offset-lg-2">
                    <h1 style="text-align: center; padding: 30px;">Create new task</h1>
                    <form method="post" action="{{route('tasks.update', $task->id)}}">
                        @method('PATCH')
                        @csrf
                        <div class="form-group">
                            <label for="task">Task content: </label>
                            <input type="text" class="form-control" name="task" value="{{$task->task}}"/>
                        </div>
                        <div class="form-group">
                            <label for="done"> Done? </label>
                            @if($task->done == false)
                                <input type="checkbox" class="form-control" name="done"/>
                            @else
                                <input type="checkbox" class="form-control" name="done" checked/>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-dark"> Update </button>
                    </form>
                 </div>
            </div>
@endsection