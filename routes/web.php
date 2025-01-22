<?php

use App\Http\Controllers\MovieController;
use App\Http\Resources\MovieResource;
use App\Models\Movie;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
   return view('welcome');
})->name('home');

Route::resource('movies', MovieController::class);

//Route::get('/movies', function() {
//    return MovieResource::collection(Movie::all());
//});
//
//Route::get('/movies/{id}', function($id) {
//    return MovieResource::collection(
//        Movie::where("id", $id)->get()
//    );
//});

