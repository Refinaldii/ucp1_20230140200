@extends('layouts.app')

@section('content')

<h2>Tambah Todo</h2>

<form action="/todos" method="POST">
    @csrf

    <div class="mb-3">
        <label>Title</label>
        <input type="text" name="title" class="form-control">
    </div>

    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control"></textarea>
    </div>

    <div class="mb-3">
        <label>Category</label>
        <select name="category_id" class="form-control">
            @foreach($categories as $c)
                <option value="{{ $c->id }}">{{ $c->name }}</option>
            @endforeach
        </select>
    </div>

    <button class="btn btn-success">Simpan</button>
</form>

@endsection