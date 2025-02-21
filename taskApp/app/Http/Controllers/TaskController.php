<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $sort = $request->input('sort');

        $query = Task::query();

        if (!empty($search)) {
            $query->where(function($q) use ($search) {
                $q->where('task_name', 'like', '%'.$search.'%')
                ->orWhere('task_location', 'like', '%'.$search.'%')
                ->orWhere('category', 'like', '%'.$search.'%')
                ->orWhere('materials_required', 'like', '%'.$search.'%');
            });
        }
            switch ($sort) {
                case 'deadline':
                    $query->orderBy('deadline', 'asc');
                        break;
                case 'task_name':
                    $query->orderBy('task_name', 'asc');
                        break;
                case 'category':
                    $query->orderBy('category', 'asc');
                        break;
                default:
                    $query->orderBy('task_name', 'asc');
            }
            $tasks = $query->get();

            return view('tasks.index', compact('tasks', 'search', 'sort'));

        // Get all tasks
        // $tasks = Task::all();
        // Return a view(e.g., resources/views/tasks/index.blade.php) with the tasks data
        // return view ('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Return a view to create a new task
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
$validated = $request->validate(Task::validationRules());
Task::create($validated);
return redirect()->route('tasks.index')->with('success', 'Task created successfully!');
}

    /**
     * Display the specified task.
     */
    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    /**
     * leave empty for now.
     */
    public function edit(string $id)
    {
        $task = Task::findOrFail($id);

        return view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified task.
     */
    public function update(Request $request, string $id)
{
$validated = $request->validate(Task::validationRules());
$task = Task::findOrFail($id);
$task->update($validated);
return redirect()->route('tasks.index')->with('success', 'Task updated successfully!');
}

    /**
     * Remove the specified task.
     */
    public function destroy(string $id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return redirect()->oute('tasks.index')->with('success', 'Task deleted successfully!');
    }
}
