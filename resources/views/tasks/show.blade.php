@extends('layouts.app')

@section('content')
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 bg-white border-b border-gray-200">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-900">{{ $task->title }}</h1>
            <div class="space-x-2">
                <a href="{{ route('tasks.edit', $task) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                    Edit
                </a>
                <a href="{{ route('tasks.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Back to Tasks
                </a>
            </div>
        </div>

        <div class="space-y-4">
            <div>
                <h3 class="text-sm font-medium text-gray-500">Description</h3>
                <p class="mt-1 text-sm text-gray-900">{{ $task->description ?: 'No description provided.' }}</p>
            </div>

            <div>
                <h3 class="text-sm font-medium text-gray-500">Status</h3>
                <p class="mt-1">
                    @if($task->is_completed)
                        <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Completed</span>
                    @else
                        <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">Not Completed</span>
                    @endif
                </p>
            </div>

            <div>
                <h3 class="text-sm font-medium text-gray-500">Created At</h3>
                <p class="mt-1 text-sm text-gray-900">{{ $task->created_at->format('M d, Y H:i') }}</p>
            </div>

            <div>
                <h3 class="text-sm font-medium text-gray-500">Updated At</h3>
                <p class="mt-1 text-sm text-gray-900">{{ $task->updated_at->format('M d, Y H:i') }}</p>
            </div>
        </div>
    </div>
</div>
@endsection