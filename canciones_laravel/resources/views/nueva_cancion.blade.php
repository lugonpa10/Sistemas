@extends('principal')
@section('titulo','Formulario de nuevas canciones')
@section('contenido')
<h1>Formulario de nueva cancion</h1>
<form action="{{ route('agregarCancion') }}" method="post">
    @csrf{{-- CrossSite Request Forgery --}}
<input type="text" name="titulo" id="titulo" placeholder="Titulo">
<input type="text" name="album" id="album" placeholder="album">
<input type="text" name="grupo" id="grupo" placeholder="grupo">
<input type="number" name="anio" id="anio" placeholder="Año">
<input type="submit" value="Guardar">


</form>
    
@endsection