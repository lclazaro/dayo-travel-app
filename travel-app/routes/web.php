<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});

Route::resource('/about',AboutController::class);
Route::resource('/home',HomeController::class);


Route::resource('/login', LoginController::class);