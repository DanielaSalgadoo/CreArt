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
}
