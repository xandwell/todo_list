<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::where('user_id', Auth::id())
                     ->orderBy('created_at', 'asc')
                     ->get();

        return view('tasks.index', compact('tasks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'task' => 'required|string|max:255',
        ]);

        Task::create([
            'task' => $request->task,
            'user_id' => Auth::id(),
        ]);

        return redirect()->back();
    }

    public function complete($id)
    {
        $task = Task::find($id);
        if ($task && $task->user_id == Auth::id()) {
            $task->completed = true;
            $task->save();
        }

        return redirect()->back();
    }

    public function delete($id)
    {
        $task = Task::find($id);
        if ($task && $task->user_id == Auth::id()) {
            $task->delete();
        }

        return redirect()->back();
    }
}

