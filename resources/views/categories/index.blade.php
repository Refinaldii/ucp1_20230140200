<!DOCTYPE html>
<html>
<head>
    <title>Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">
    <h2>Todo Category</h2>

    <a href="/categories/create" class="btn btn-primary mb-3">+ Tambah Category</a>

    <table class="table table-dark table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Todo</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach($categories as $c)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $c->name }}</td>
                <td>{{ $c->todos_count }}</td>
                <td>
                    <a href="/categories/{{ $c->id }}/edit" class="btn btn-warning btn-sm">Edit</a>

                    <form action="/categories/{{ $c->id }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>