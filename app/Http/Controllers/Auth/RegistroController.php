<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegistroController extends Controller
{
    public function Registro(Request $request)
    {

        //Validación de datos
        $request->validate([
                'Nombre' => 'required',
                'Celular' => 'required|min:10',
                'Correo' => 'required',
                'Nacimiento' => 'required',
                'password' => 'required|min:8'
            ]);

        // Registro de un nuevo Usuario
        $Usuario = new User();

        // Establecer los datos del Usuario
        $Usuario->Nombre = $request->Nombre;
        $Usuario->Celular = $request->Celular;
        $Usuario->Correo = $request->Correo;
        $Usuario->Fecha_Nacimiento = $request->Nacimiento;
        $Usuario->password = $request->password;

        //Guardar Usuario
        $Usuario->save();

        auth()->login($Usuario);
        return redirect('/');
    }
}
