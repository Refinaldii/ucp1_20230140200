@extends('layouts.app')

@section('content')

<h2>Tambah Category</h2>

<form action="/categories" method="POST">
    @csrf

    <div class="mb-3">
        <label>Nama Category</label>
        <input type="text" name="name" class="form-control">
    </div>

    <button class="btn btn-success">Simpan</button>
</form>

@endsection