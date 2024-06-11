<?php

namespace App\Http\Controllers\Usuario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function VistaPerfil()
    {
        $Perfil = auth()->user();

        return view('Perfil/perfil', compact('Perfil'));
    }

    public function EditarPerfil()
    {
        return view('Perfil.editarPerfil');
    }

    public function IdeasCreadas()
    {
        $Usuario = auth()->user();

        return view('Perfil/ideasCreadas', compact('Usuario'));
    }

    public function IdeasGuardadas()
    {
        $Usuario = auth()->user();

        return view('Perfil/ideasGuardadas', compact('Usuario'));
    }
}
