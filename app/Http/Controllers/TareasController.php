<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TareasController extends Controller
{
    public function index(){
        $mensaje = "hola";
        $mensajes = ['mensaje 1', 'mensaje 2', 'mensaje 3'];
       return view('mistareas', ['aviso' => $mensaje, 'mensajes' => $mensajes]);
        //return view('mistareas', compact('mensaje', 'mensajes')); //Esto es como lo de arriba
    }
}
