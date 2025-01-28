<?php

use App\Http\Controllers\Api\V1\GenreController;
use App\Http\Controllers\Api\V1\MovieController;
use App\Http\Controllers\Api\V1\ActorController;
use App\Http\Controllers\Api\V1\ReviewController;
use App\Http\Controllers\Api\V1\DirectorController;
use App\Http\Controllers\Api\V1\TicketController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\V1'], function () {
    Route::apiResource('movies', MovieController::class);
    Route::apiResource('genres', GenreController::class);
    Route::apiResource('actors', ActorController::class);
    Route::apiResource('reviews', ReviewController::class);
    Route::apiResource('directors', DirectorController::class);
    Route::apiResource('tickets', TicketController::class);
});
