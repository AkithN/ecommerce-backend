<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [RegisterController::class, 'register']);
Route::put('/register/{id}', [RegisterController::class, 'edit']);
Route::get('/user', [RegisterController::class, 'show']);

Route::post('/login', [LoginController::class, 'login']);

Route::apiResource('products', ProductController::class);
