<?php

use App\Http\Controllers\Auth\RegistroController;
use App\Http\Controllers\Auth\SesionController;
use App\Http\Controllers\Usuario\PerfilController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Session\Storage\Handler\IdentityMarshaller;

Route::get('/', function () {
    return view('index');
})->name('index');

// Ruta para La vista Perfil
Route::get('/perfil', [PerfilController::class, 'VistaPerfil'])
    ->name('perfil');

// Ruta para La vista Creados en perfil
Route::get('/ideasCreadas', [PerfilController::class, 'IdeasCreadas'])
    ->name('ideasCreadas');

// Ruta para La vista Guardados en Perfil
Route::get('/ideasGuardadas', [PerfilController::class, 'IdeasGuardadas'])
    ->name('ideasGuardadas');

// Ruta para La vista Editar Perfil
Route::get("/editarPerfil", [PerfilController::class, 'EditarPerfil'])
    ->name('editarPerfil');

// Ruta para el Controlador de Registro
Route::post('Registro/Usuario', [RegistroController::class, 'Registro'])
    ->name('Registro.Usuario');


// Ruta para el Inicio de Sesión
Route::post('Inicio/Sesion', [SesionController::class, 'Inicio'])
    ->name('Inicio.Sesion');

// RUta para Cerrar Sesión
Route::get('Cerrar/Sesion', [SesionController::class, 'Cerrar'])
    ->name('Cerrar.Sesion');
