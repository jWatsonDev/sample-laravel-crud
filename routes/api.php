<?php
use App\Http\Controllers\ThingController;

Route::get('/things', [ThingController::class, 'index']);
Route::get('/things/{id}', [ThingController::class, 'show']);
Route::post('/things', [ThingController::class, 'store']);
Route::put('/things/{id}', [ThingController::class, 'update']);
Route::delete('/things/{id}', [ThingController::class, 'destroy']);
