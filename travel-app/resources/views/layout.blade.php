<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMQU98MF5F/8AvfPuhp7cReHDUyec5WglJln76F" crossorigin="anonymous">

    <title>DAYO: Travel Manager</title>
    <style>
        @font-face {
            font-family: 'Heartbroken';
            src: url('{{ asset('assets/font/Heartbroken.ttf') }}') format('truetype');
        }

        html, body {
            height: 100%;
            width: 100%;
            margin: 0;
            padding: 0;
            overflow: hidden;
            font-family: 'Heartbroken', sans-serif;
            background: url('{{ asset('assets/img/background.png') }}') no-repeat center center fixed;
            background-size: cover;
        }

        .container {
            display: flex;
            flex-direction: column;
            height: 100%;
            width: 100%;
        }

        .content-wrapper {
            display: flex;
            height: calc(100% - 56px); /* Subtract navbar height */
            width: 100%;
            flex: 1;
        }

        .sidebar {
            width: 100px;
            background-color: #FFF;
            overflow: auto;
            
        }

        .sidebar a {
            display: flex;
            align-items: center;
            color: black;
            padding: 16px;
            text-decoration: none;
        }

        .sidebar a img {
            height: 32px;
            width: 32px;
            margin-right: 8px;
        }

        .sidebar a.active {
            background-color: white;
            color: white;
        }

        .sidebar a:hover:not(.active) {
            background-color: #072E36;
            opacity: 0.5; /* Adjust opacity as needed */
            z-index: -1;
            color: white;
        }

        .content {
            position: relative;
            flex: 1;
            padding: 16px; /* Add padding as needed */
            margin: 0; /* Remove margin */
            display: flex;
            flex-direction: column;
            overflow: auto;
            background-color: transparent; /* Ensure the original background is transparent */
}

.content::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #BB7520; /* Original background color */
    opacity: 0.5; /* Adjust opacity as needed */
    z-index: -1.5; /* Ensure it is behind the content */
}

        .user-list {
            font-family: 'Heartbroken', sans-serif;
        }

        .navbar-brand img {
            height: 80px;
            width: auto;
        }

        @media screen and (max-width: 1000px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }
            .sidebar a {float: left;}
            .content {margin-left: 0;}
        }

        @media screen and (max-width: 1000px) {
            .sidebar a {
                text-align: center;
                float: none;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img src="{{ asset('assets/img/logo.png') }}" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        
                    </li>
                    
                </ul>
                
                <ul class="navbar-nav ml-auto">
                <a class="nav-link" href="{{ url('about') }}">About Us</a>
                    <li class="nav-item">
                    </li>
                </ul>
            </div>
        </nav>

        <div class="content-wrapper">
            <div class="sidebar">
                <a class="active" href="{{ url('/') }}"><img src="{{ asset('assets/img/home.png') }}" alt="Home"></a>
                <a href="{{ url('users') }}" class="user-list"><img src="{{ asset('assets/img/user.png') }}" alt="User"></a>
                <a href="{{ url('listings') }}"><img src="{{ asset('assets/img/list.png') }}" alt="List"></a>
                <a href="{{ url('listing_types') }}"><img src="{{ asset('assets/img/building.png') }}" alt="Building"></a>
                <a href="{{ url('countries') }}"><img src="{{ asset('assets/img/countries.png') }}" alt="Countries"></a>
            </div>

            <div class="content">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
