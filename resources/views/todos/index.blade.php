@extends('layouts.app')

@section('content')

<h3 class="mb-4">Todo</h3>

<a href="/todos/create" class="btn btn-light btn-sm mb-3">CREATE</a>

<div class="card" style="background-color:#1e293b; border:none;">
    <div class="card-body">

        <table class="table table-borderless text-white">
            <thead style="background-color:#334155;">
                <tr>
                    <th>TITLE</th>
                    <th>CATEGORY</th>
                    <th>STATUS</th>
                    <th>ACTION</th>
                </tr>
            </thead>

            <tbody>
                @foreach($todos as $t)
                <tr style="border-bottom:1px solid #334155;">
                    <td>{{ $t->title }}</td>
                    <td>{{ $t->category->name ?? '-' }}</td>

                    <td>
                        <span class="badge bg-primary">Ongoing</span>
                    </td>

                    <td>
                        <a href="#" class="text-success me-2">Complete</a>

                        <form action="/todos/{{ $t->id }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button style="background:none; border:none; color:red;">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

@endsection