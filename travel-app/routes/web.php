<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\ListingTypeController;
use App\Http\Controllers\CountryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout');
});

Route::resource('/users',UserController::class);
Route::resource('/listings',ListingController::class);
Route::resource('/listingtypes',ListingTypeController::class);
Route::resource('/countries',CountryController::class);

// routes/web.php

Route::get('/about', function () {
    return view('about');
});

