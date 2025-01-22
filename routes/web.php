<?php

use App\Http\Controllers\MovieController;
use App\Http\Resources\MovieResource;
use App\Models\Movie;
use Illuminate\Support\Facades\Route;

// LANDING PAGE
Route::get('/', function() {
   return view('welcome');
})->name('home');

// DOCUMENTATION PAGE
Route::get('docs', function() {
    return view('docs.index');
})->name('docs.index');

// ABOUT PAGE
Route::get('about', function() {
   return view('about.index');
})->name('about.index');

Route::resource('movies', MovieController::class);
