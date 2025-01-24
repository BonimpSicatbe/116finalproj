<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

// LANDING PAGE
Route::resource('movies', MovieController::class);
