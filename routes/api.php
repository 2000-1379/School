<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/indexStudent',[\App\Http\Controllers\StudentsController::class,'indexStudent']);
Route::post('/storeStudent',[\App\Http\Controllers\StudentsController::class,'storeStudent']);
