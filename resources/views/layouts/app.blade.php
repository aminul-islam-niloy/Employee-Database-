<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Employee Management')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Include your CSS file -->
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('employees.index') }}">Employees</a>
                </li>
              
            </ul>
        </div>
    </div>
</nav>
    <div class="container">
     
        @yield('content')
    </div>

    <footer class="justify-content-center text-center">
        <p >&copy; 2024 Employee Management</p>
    </footer>
</body>
</html>
