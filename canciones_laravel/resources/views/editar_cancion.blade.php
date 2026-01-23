@extends('principal')
@section('titulo', 'Editar canción')
@section('contenido')
    <h1>Editar Cancion</h1>
    <form action="{{ route('actualizarCancion') }}" method="post">
        @csrf
        <input value="{{ $cancion->id }}" type="hidden" name="idCancion">
        <input value="{{ $cancion->titulo }}" type="text" name="titulo" placeholder="Nombre de la canción">
        <br><br>
        <input value="{{ $cancion->artista }}" type="text" name="artista" placeholder="Artista">
        <br><br>
        <input value="{{ $cancion->album }}" type="text" name="album" placeholder="Álbum">
        <br><br>
        <input value="{{ $cancion->anio }}" type="number" name="anio" placeholder="Año">
        <br><br>
        <input type="submit" value="Guardar">
    </form>
@endsection
