@extends('principal')
@section('titulo','Todas las canciones')
@section('contenido')
<h1>Todas las canciones de mi discografia</h1>
<table>
    <thead>
        <tr>
            <th>titulo</th>
            <th>album</th>
            <th>grupo</th>
            <th>año</th>
            <th>Actualizar</th>
            <th>Borrar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($canciones as $cancion)
            <tr>
                <td>{{ $cancion ->titulo }}</td>
                <td>{{ $cancion ->album }}</td>
                <td>{{ $cancion ->grupo }}</td>
                <td>{{ $cancion ->anio }}</td>
                {{-- <td><a href="{{ route('editarCancion',['id'=>$cancion->id]) }}"></a></td>
                <td><a href="{{ route('eliminarCancion',['id'=>$cancion->id]) }}"></a></td> --}}

            </tr>
        @endforeach
    </tbody>
</table>
    
@endsection