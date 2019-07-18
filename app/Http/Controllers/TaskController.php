<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::where('deleted', 0)
                    ->orderBy('id', 'asc')
                    ->get();

        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'task' => 'required'
        ]);

        $task = new Task([
            'task' => $request->get('task'),
            'done' => false,
            'deleted' => false
        ]);

        $task->save();
        return redirect('/tasks')->with('success', 'Task saved successfully.');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $task = Task::find($id);
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
           'task' => 'required'
        ]);

        $task = Task::find($id);
        $task->task = $request->get('task');

        if(is_null($request->get('done'))){

            $task->done = false;
        }
        else{
            $task->done = true;
        }
        $task->save();

        return redirect('/tasks')->with('success', 'Task updated successfully.');
    }

    public function destroy($id)
    {
        Task::destroy($id);

//        $task = Task::find($id);
//        $task->deleted = true;
//        var_dump($task->deleted);die;
//        $task->save();

        return redirect('/tasks')->with('success', 'Task deleted successfully.');
    }
}
