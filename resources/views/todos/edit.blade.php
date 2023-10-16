@extends('layouts.app')

@section('content')
<h3>Edit Todo</h3>

{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}

<form action="{{ route('todos.update', $todo->id) }}" method="post">
    @csrf
    @method('PUT')
    <div>
        <label>Title</label>

        <input type="text" name="title" id="title" value="{{ old('title') ? : $todo->title }}" />

        @if($errors->has('title'))
            <span> {{ $errors->first('title') }} </span>
        @endif
    </div>
    <div>
        <label>Description</label>

        <input type="text" name="body" id="body" value="{{ old('body') ? : $todo->body }}"/>

        @if($errors->has('body'))
            <span> {{ $errors->first('body') }} </span>
        @endif
    </div>
    <button type="submit">Edit</button>
</form>
@endsection