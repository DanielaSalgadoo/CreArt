<?php

use App\Http\Controllers\Auth\RegistroController;
use App\Http\Controllers\Auth\SesionController;
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

// Ruta para el Controlador de Registro
Route::post('Registro/Usuario', [RegistroController::class, 'Registro'])
    ->name('Registro.Usuario');


// Ruta para el Inicio de Sesión
Route::post('Inicio/Sesion', [SesionController::class, 'Inicio'])
    ->name('Inicio.Sesion');

Route::get('Cerrar/Sesion', [SesionController::class, 'Cerrar'])
    ->name('Cerrar.Sesion');
