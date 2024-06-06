<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout');
});

Route::resource('/users',UserController::class);
Route::resource('/listings',UserController::class);
Route::resource('/listingtypes',UserController::class);
Route::resource('/countries',UserController::class);