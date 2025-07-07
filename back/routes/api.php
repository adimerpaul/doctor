<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');

Route::get('/carrusel', [\App\Http\Controllers\CarruselController::class, 'index']);
Route::get('/doctores', [\App\Http\Controllers\UserController::class, 'doctores']);
Route::post('/login', [\App\Http\Controllers\UserController::class, 'login']);
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/carrusel', [\App\Http\Controllers\CarruselController::class, 'store']);
    Route::put('/carrusel/{id}', [\App\Http\Controllers\CarruselController::class, 'update']);
    Route::delete('/carrusel/{id}', [\App\Http\Controllers\CarruselController::class, 'destroy']);
});
