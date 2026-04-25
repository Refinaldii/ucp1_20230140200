@extends('layouts.app')

@section('content')

<h2>Dashboard</h2>

<div class="row mt-4">

    <div class="col-md-6">
        <div class="card text-white bg-primary mb-3">
            <div class="card-body">
                <h5>Total Category</h5>
                <h2>{{ $totalCategory }}</h2>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card text-white bg-success mb-3">
            <div class="card-body">
                <h5>Total Todo</h5>
                <h2>{{ $totalTodo }}</h2>
            </div>
        </div>
    </div>

</div>

@endsection