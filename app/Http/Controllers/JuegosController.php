<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Juego;


class JuegosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Juego::query();
        $request->has('nombre');
        if($request->has('nombre')) {
            $query->where('nombre', 'like', '%'.$request->nombre.'%');
        }
        $juegos = $query->get();
        return view('juegos', ['juegos' => $juegos]); #es igual a compact('juegos')
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crearjuego');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*$juego = new Juego();
        $juego->nombre = $request->input('nombre');
        $juego->descripcion = $request->input('descripcion');
        $juego->save();
        return redirect()->route('listajuegos');*/
        $request->validate([
            'nombre' => 'required|max:10',
            'descripcion' => 'required'
        ]);
        Juego::create($request->all());
        return redirect()->route('listajuegos')->with('success', 'Juego creado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $juego = Juego::findOrFail($id);
        return view('mostrarjuego', compact('juego'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
