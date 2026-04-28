@extends('layouts.app')

@section('content')

<div class="container mt-5">

    <div class="card shadow">
        <div class="card-header text-white" style="background-color:#1e293b;">
            <h4 class="mb-0">Edit Category</h4>
        </div>

        <div class="card-body">

            <form action="/categories/{{ $category->id }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Nama Category</label>
                    <input type="text" name="name" value="{{ $category->name }}" class="form-control" placeholder="Masukkan nama category">
                </div>

                <div class="d-flex justify-content-between">
                    <a href="/categories" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>

            </form>

        </div>
    </div>

</div>

@endsectionoda