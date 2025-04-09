<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\TaskStatus;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    //
    public function index(){
        $current_user = auth()->user();
        $tasks = Task::where('personal_id', $current_user->id)->paginate(10);
        return view('tasks', compact('tasks'));
    }

    public function task_details($id)
    {
        $task = Task::where('id', $id)->first();
        return view('task_details', compact('task'));
    }

    public function edit(Task $task)
    {
        $statuses = TaskStatus::all();
        return view('task_form', compact('task', 'statuses'));
    }

    public function update(Request $request, Task $task)
    {
        $task->update($request->all());
        $task->save();
        return redirect()->route('tasksMenu');
    }
}
