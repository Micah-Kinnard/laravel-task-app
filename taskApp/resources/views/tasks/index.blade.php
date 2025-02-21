@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4 text-center">All Tasks</h1>
{{-- search and sort form --}}
<div class="flex justify-center">
    <div class="border bg-white p-10 rounded-lg">

    <form action="{{ route('tasks.index') }}" method="GET" class="mb-4">
        <!-- Search Field -->
     <input
     type="text"
     name="search"
     value="{{ request('search') }}"
     placeholder="Search tasks..."
     class="border border-gray-300 px-2 py-1 rounded"
     >

     <!-- Sort Options -->
      <select name="sort" class="border border-gray-300 px-2 py-1 rounded">
        <option value="task_name" {{ request('sort') === 'task_name' ? 'selected' : '' }}>Alphabetical</option>
        <option value="deadline" {{ request('sort') === 'deadline' ? 'selected' : '' }}>Deadline</option>
        <option value="category" {{ request('sort') === 'category' ? 'selected' : '' }}>Category</option>
    </select>

    <button type="submit" class="bg-purple-400 text-white px-4 py-2 ml-2 rounded hover:bg-purple-600">Search & Sort</button>
</form>
<ul class="text-center">
    @forelse($tasks as $task)

        <!-- Link to the show page -->
        <a href="{{ route('tasks.show', $task->id) }}" class="underline ml-2"><li class="mb-2 p-2 {{ $task->priority === 3 ? 'bg-red-300' : ($task->priority === 2 ? 'bg-amber-100' : 'bg-green-200') }}"> {{ $task->task_name }}</li></a>


    @empty
    <li>No tasks</li>
    @endforelse
</ul>
<div class="mt-4">
    <a href="{{ route('tasks.create') }}" class="bg-purple-400 text-white  flex justify-center px-4 py-2 rounded hover:bg-purple-600 ">Create a New Task</a>
</div>
</div>
</div>
@endsection