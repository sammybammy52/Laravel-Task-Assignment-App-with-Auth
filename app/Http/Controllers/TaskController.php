<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function storeTasks(Request $request)
    {
        $user = Task::create([
            'task_name' => $request->task_name,
            'assigned_to' => $request->assigned_to,
        ]);

        return redirect('/dashboard') ->with('mssg', 'Task addition successful');
    }

    public function updateTasks(Request $request, $id)
    {
        $task = Task::find($id);
        $task->update($request->all());

        return redirect('/dashboard') ->with('mssg', 'update successful');
    }

    public function deleteTasks($id)
    {
        Task::destroy($id);
        return redirect('/dashboard') ->with('mssg', 'deletion successful');
    }

}
