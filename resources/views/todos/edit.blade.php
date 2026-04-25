@extends('layouts.app')

@section('content')

<h2>Edit Todo</h2>

<form action="/todos/{{ $todo->id }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Title</label>
        <input type="text" name="title" value="{{ $todo->title }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control">{{ $todo->description }}</textarea>
    </div>

    <div class="mb-3">
        <label>Category</label>
        <select name="category_id" class="form-control">
            @foreach($categories as $c)
                <option value="{{ $c->id }}" {{ $todo->category_id == $c->id ? 'selected' : '' }}>
                    {{ $c->name }}
                </option>
            @endforeach
        </select>
    </div>

    <button class="btn btn-primary">Update</button>
</form>

@endsection