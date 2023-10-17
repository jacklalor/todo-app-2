@extends('layouts.myApp')

@section('header')
<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
    Todos
</h2>
@endsection

@section('content')
 <a href="{{ route('todos.create') }}">Create</a>

 <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Title
                </th>
                <th scope="col" class="px-6 py-3">
                    Snippet
                </th>
                <th scope="col" class="px-6 py-3">
                    Created
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>

            @forelse($todos as $todo)
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $todo->title }}
                </th>
                <td class="px-6 py-4">
                    {{ $todo->body }}
                </td>
                <td class="px-6 py-4">
                    {{ $todo->created_at }}
                </td>
                <td class="px-6 py-4">
                    <a href="{{ route('todos.show', $todo->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>
            @empty
                <h4>No Todos found!</h4>
            @endforelse
        </tbody>
    </table>
</div>
@endsection