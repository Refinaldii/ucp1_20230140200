<!DOCTYPE html>
<html>
<head>
    <title>Todo App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a href="/" class="navbar-brand">Todo App</a>

        <div>
            <a href="/categories" class="btn btn-light btn-sm">Category</a>
            <a href="/todos" class="btn btn-light btn-sm">Todo</a>
        </div>
    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

</body>
</html>