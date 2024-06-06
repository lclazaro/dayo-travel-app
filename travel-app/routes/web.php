<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout');
});

Route::resource('/users',UserController::class);

// routes/web.php

Route::get('/about', function () {
    return view('about');
});
