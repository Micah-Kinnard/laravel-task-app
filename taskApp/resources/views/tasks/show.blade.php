@extends('layouts.app')

@section('content')
<h1 class=" text-xl font-bold text-center">Task Details</h1>
<div class="flex justify-center">
    <div class="border bg-blue-200 p-10 rounded-lg text-center {{ $task->priority === 3 ? 'bg-red-300' : ($task->priority === 2 ? 'bg-amber-100' : 'bg-green-200') }}">
<div class="">
    <strong>Task Name:</strong> {{ $task->task_name }}
</div>
<div>
    <strong>Location:</strong> {{ $task->task_location }}
</div>
<div>
    <strong>Time Complexity:</strong> {{ $task->time_complexity }}
</div>
<div>
    <strong>Materials Required:</strong> {{ $task->materials_required }}
</div>
<div>
    <strong>Deadline:</strong> {{ $task->deadline }}
</div>
<div>
    <strong>Priority:</strong> {{ $task->priority }}
</div>
<div>
    <strong>Category:</strong> {{ $task->category }}
</div>
<div style="margin-top:20px;">
    <a href="{{ route('tasks.edit', $task->id) }}" class="bg-white p-2">Edit Task</a>
    <a href="{{ route('tasks.index') }}" class="btn btn-secondary bg-white p-2">Back to List</a>
</div>
</div>
</div>
@endsection