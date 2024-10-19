<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('task.index',compact('tasks'));
        
    }

    public function show($request)
    {
        $task = Task::create([
            'name' => $request->input('name'),
        ]);
        return view('task.index');
        
    }
}
