<!DOCTYPE html>
<html>
<head>
    <title>Todo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Data Todo</h2>

    <a href="/todos/create" class="btn btn-primary mb-3">+ Tambah Todo</a>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Category</th>
        </tr>

        @foreach($todos as $t)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $t->title }}</td>
            <td>{{ $t->category->name }}</td>
        </tr>
        @endforeach
    </table>
</div>

</body>
</html>