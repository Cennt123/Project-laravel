<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #b3d3f3;
            color: #343a40;
        }

        h1 {
            text-align: center;
            color: #ffffff;
        }

        nav {
            background-color: #384a55;
        }

        .navbar-light .navbar-nav .nav-link {
            color: #fff;
        }

        .navbar-light .navbar-toggler-icon {
            background-color: #fff;
        }

        .nav-link.active {
            color: #ffc107;
        }

        .container {
            background-color: #e5e5f7;
            opacity: 0.8;
            background-size: 20px 20px;
            background-image:  repeating-linear-gradient(0deg, #444cf7, #444cf7 1px, #e5e5f7 1px, #e5e5f7);
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-light">
        <h1></h1>

        <ul class="nav justify-content-end nav-pills">

            <li class="nav-item">
                <a class="nav-link {{ Route::is('home') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('artists') ? 'active' : '' }}" href="{{ url('/artist') }}">Artist</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('albums') ? 'active' : '' }}" href="{{ url('/album') }}">Album</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('tracks') ? 'active' : '' }}"  href="{{ url('/track') }}">Track</a>
            </li>

        </ul>
    </nav>

    <div class="container mt-5">
        @yield('content')
    </div>
</body>
</html>
