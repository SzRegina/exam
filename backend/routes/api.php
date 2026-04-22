<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriaController;
use App\Http\Controllers\ActivityController;

Route::get('/categories', [KategoriaController::class, 'index']);
Route::get('/categories/{id}', [KategoriaController::class, 'show']);

Route::post('/activities', [ActivityController::class, 'store']);
Route::put('/activities/{id}', [ActivityController::class, 'update']);
Route::delete('/activities/{id}', [ActivityController::class, 'destroy']);