<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

// Route::post('/login', [LoginController::class, 'login']);
// Route::get('/logout', [LoginController::class, 'logout']);
// Route::get('/register', [LoginController::class,'register']);

// Route::get('/home', [LoginController::class, 'home']);
// Route::get('/profile', [LoginController::class, 'profile']);
// Route::get('/edit', [LoginController::class, 'edit']);
// Route::post('/edit', [LoginController::class, 'update']);
// Route::get('/delete', [LoginController::class, 'delete']);
// Route::post('/delete', [LoginController::class, 'destroy']);


Route::get('/', function () {
    return view('index');
});
