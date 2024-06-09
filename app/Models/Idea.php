<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    use HasFactory;

    protected $fillable = [
        'Imagen',
        'Titulo_Idea',
        'Descripcion',
        'Id_Categoria',
        'Id_Usuario',
        'Id_Tablero',
    ];

}
