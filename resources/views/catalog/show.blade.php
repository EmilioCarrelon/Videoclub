@extends('layouts.master')

@section('content')

    <div class="row">

        <div class="col-sm-4">

            {{-- TODO: Imagen de la película --}}
            <img src="{{$pelicula['poster']}}"  class="img-fluid"/>

        </div>
        <div class="col-sm-8">

            {{-- TODO: Datos de la película --}}

            <h4 style="min-height:45px;margin:5px 0 10px 0">
                {{$pelicula['title']}}
            </h4>
            <p>Año:{{$pelicula['year']}}</p>
            <p>Director:{{$pelicula['director']}}</p>

            <p>Resumen:{{$pelicula['synopsis']}}</p>

            @if( $pelicula['rented'] =true )
                <p>Estado: Pelicula disponible actualmente</p>
                <button type="button" class="btn btn-primary">Alquilar</button>
                <a class="btn btn-primary" href="{{url('/catalog/edit/' . $id )}}" role="button"><i class="fas fa-pencil-alt"></i>Editar Pelicula</a>

                <button type="button" class="btn btn-dark"><i class="fas fa-arrow-left"></i>Volver al listado</button>

            @elseif ($pelicula['rented']==false)
                <p>Estado: pelicula no disponible actualmente</p>
                <button type="button" class="btn btn-danger">Devolver pelicula</button>
                <button type="button" class="btn btn-primary"><i class="fas fa-pencil-alt"></i>Editar Pelicula</button>
                <button type="button" class="btn btn-dark"><i class="fas fa-arrow-left"></i>Volver al listado</button>

            @endif
        </div>
    </div>

@stop