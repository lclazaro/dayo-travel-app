<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>DAYO: Travel Manager</title>
<body>
    <div class="container">
        <!-- DAYO: Travel Manager Navigation Bar -->
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-primary" href="{{ url('home') }}" role="button">Home</a>
                <a class="btn btn-primary" href="{{ url('about') }}" role="button">About</a>
                <a class="btn btn-primary" href="{{ url('login') }}" role="button">Login</a>
                <a class="btn btn-primary" href="{{ url('signup') }}" role="button">Signup</a>
            </div>
        </div>
        <div class="col-md-9">
            @yield('content')
        </div>
    </div>
</body>
</html>