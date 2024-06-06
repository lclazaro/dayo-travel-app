<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMQU98MF5F/8AvfPuhp7cReHDUyec5WglJln76F" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <title>Homepage</title>
    <style>
        
        html, body {
            height: 100%;
            margin: 0;
            font-family: 'Roboto', sans-serif;
        }
        .navbar {
            background-color: #64816B;
            border-bottom: 1px solid #ddd;
        }
        .navbar-brand img {
            height: 40px;
            width: auto;
        }
        .content-wrapper h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }
        .content-wrapper p {
            font-size: 1.25rem;
            margin-bottom: 1.5rem;
        }
        .btn-custom {
            padding: 0.75rem 1.25rem;
            font-size: 1rem;
        }
        .sidebar {
            width: 150px; /* Adjust the width to make the sidebar narrower */
            background-color: #f1f1f1;
            overflow: auto;
        }

        .sidebar a {
            display: flex;
            align-items: center;
            color: #324F39;
            padding: 16px;
            text-decoration: none;
        }

        .sidebar a img {
            height: 1em;
            width: auto;
            margin-right: 8px;
        }

        .sidebar a.active {
            background-color: #04AA6D;
            color: white;
        }

        .sidebar a:hover:not(.active) {
            background-color: #555;
            color: white;
        }

        .content {
            flex: 1;
            padding: 1px 16px;
        }

        .user-list {
            font-family: 'Heartbreak', sans-serif;
        }

        @media screen and (max-width: 700px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }
            .sidebar a {float: left;}
            .content {margin-left: 0;}
        }

        @media screen and (max-width: 400px) {
            .sidebar a {
                text-align: center;
                float: none;
            }
        }
        
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <a class="btn btn-outline-primary ml-2" href="#">Log In</a>
        </div>
    </nav>

    <div class="bg-cover">
        <div class="content-wrapper">
            <h1>No place to stay, but here we find our way.</h1>
            <p>DAYO is an app designed to assist students in finding safe, affordable, and comfortable accommodations. Whether you're looking for a dorm room, a shared apartment, or a condominium, DAYO offers a seamless and efficient way to locate your ideal living space. Our mission is to ensure that every student finds a place they can call home, where they feel secure and supported throughout their academic journey.</p>
            <a href="#" class="btn btn-dark btn-custom">Sign up here</a>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
