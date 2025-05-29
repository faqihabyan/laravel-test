<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>title</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css">
</head>
<body>
    <div class="container mt-3">
        <br>
        <div class="d-flex justify-content-end">
            @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="btn btn-outline-danger btn-sm" type="submit">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="btn btn-outline-primary btn-sm">Login</a>
                <a href="{{ route('register') }}" class="btn btn-outline-secondary btn-sm">Register</a>
            @endauth
        </div>
        <br>
        @yield('content')
    </div>
</body>

</html>