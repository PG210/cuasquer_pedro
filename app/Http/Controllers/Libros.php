<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Libros extends Controller
{
    public function index(){//retorna la vista o interactua con el modelo de datos
        return view('libros.libros');//vista principal
    } 
}
