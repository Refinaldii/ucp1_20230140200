<!DOCTYPE html>
<html>
<head>
    <title>Todo App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color:#0f172a; color:white;">

<nav class="navbar navbar-expand-lg" style="background-color:#1e293b;">
    <div class="container">
        <a class="navbar-brand text-white" href="/">Dashboard</a>

        <div>
            <a href="/todos" class="text-white me-3">Todo</a>
            <a href="/categories" class="text-white">Category</a>
        </div>
    </div>
</nav>

<div class="container mt-5">
    @yield('content')
</div>

</body>
</html>