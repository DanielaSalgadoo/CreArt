<?php

namespace App\Http\Controllers\Idea;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ideaController extends Controller
{
    public function idea(){
        return view('Idea.crearIdea');
    }
}
