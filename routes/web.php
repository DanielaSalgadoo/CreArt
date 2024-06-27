<?php

use App\Http\Controllers\Auth\RegistroController;
use App\Http\Controllers\Auth\SesionController;
use App\Http\Controllers\Idea\ideaController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Session\Storage\Handler\IdentityMarshaller;

Route::get('/', function () {
    return view('index');
})->name('index');

// Ruta para La vista Perfil
Route::get('/perfil', function () {
    return view('Perfil/perfil');
    
})->name('perfil');

// Ruta para La vista Creados en perfil
Route::get('/ideasCreadas', function(){
    return view('Perfil/ideasCreadas');
})->name('ideasCreadas');

// Ruta para La vista Guardados en Perfil
Route::get('/ideasGuardadas', function() {
    return view('Perfil/ideasGuardadas');
})->name('ideasGuardadas');

 // Ruta para La vista Editar Perfil
 Route::get("/editarPerfil", function(){
    return view('Perfil/EditarPerfil/editarPerfil');
 })->name('editarPerfil');

// Ruta para La vista Crear Idea
Route::get('Idea/crearIdea',[ideaController::class, 'idea'])
    ->name('crearIdea');

// Ruta para el Controlador de Registro
Route::post('Registro/Usuario', [RegistroController::class, 'Registro'])
    ->name('Registro.Usuario');


// Ruta para el Inicio de Sesión
Route::post('Inicio/Sesion', [SesionController::class, 'Inicio'])
    ->name('Inicio.Sesion');

Route::get('Cerrar/Sesion', [SesionController::class, 'Cerrar'])
    ->name('Cerrar.Sesion');
