<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cancion;

class CancionController extends Controller
{
    //
    public function index()
    {
        $songs = Cancion::get();
        return view('inicio', ['canciones' => $songs]);
    }
    public function agregarCancion(Request $peticion)
    {
        $cancion = new Cancion;
        $cancion->titulo = $peticion->titulo;
        $cancion->album = $peticion->album;
        $cancion->grupo = $peticion->grupo;
        $cancion->anio = $peticion->anio;
        $cancion->save();
        session()->flash('mensaje', 'Cancion agregada correctamente');
        return redirect()->route('inicio');
    }

    public function eliminarCancion(Request $peticion)
    {
        $ideliminar = $peticion->route('id');
        $cancion = Cancion::findOrFail($ideliminar);
        $cancion->delete();
        session()->flash('mensaje', 'Cancion borrada correctamente');
        return redirect()->route('inicio');
    }
    public function actualizarCancion(Request $peticion)
    {
        $idactualizar = $peticion->id;
        $cancion = Cancion::findOrFail($idactualizar);
        $cancion->titulo = $peticion->titulo;
        $cancion->album = $peticion->album;
        $cancion->grupo = $peticion->grupo;
        $cancion->anio = $peticion->anio;
        $cancion->save();
        session()->flash('mensaje', 'Cancion actualizada correctamente');
        return redirect()->route('inicio');
    }
    public function editarCancion(Request $peticion)
    {
        $ideditar = $peticion->route('id');
        $cancion = Cancion::findOrFail($ideditar);
        return view('editar_cancion', ['cancion' => $cancion]);
    }
}
