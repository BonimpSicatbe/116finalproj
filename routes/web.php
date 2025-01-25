<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

// LANDING PAGE
Route::get('/', function () {
    return view('welcome');
})->name('landing-page');

Route::resource('movies', MovieController::class);
