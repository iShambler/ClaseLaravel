<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiController extends Controller
{
    function inicio(){
        $hola = "jaja";
        return view('mipagina', compact('hola'));
    
    }

    function cerrarSesion(){
}


}
