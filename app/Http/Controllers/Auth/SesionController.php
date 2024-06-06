<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SesionController extends Controller
{
    public function Inicio(Request $request)
    {
        // Validación de los datos
        $request->validate([
                'Correo' => 'required',
                'password' => 'required|min:8'
            ]);

        // Verificar si el Usuario está registrado
        if (auth()->attempt(request(['Correo', 'password'])) == false) {
            return back()->withErrors(['message' => 'Correo y/o contraseña incorrectos, intentelo nuevamente.']);
        } else {
            return redirect('/');
        }
    }

    public function Cerrar()
    {
        auth()->logout();
        return redirect('/');
    }
}
