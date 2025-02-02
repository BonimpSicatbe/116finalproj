<?php

use App\Http\Controllers\MovieConntroller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/landing-page', function () {
//     return view('landingPage');
// });
Route::get('/documentation', function () {
    return view('documentation');
});

Route::get('/', function () {
    return view('landingPage');
})->name('dashboard');

// VIEWS
Route::resource('movies', MovieConntroller::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


