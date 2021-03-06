@extends('layouts.master')

@section('content')

    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    Modificar película
                </div>
                <div class="card-body" style="padding:30px">

                    {{-- TODO: Abrir el formulario e indicar el método POST --}}
                    <form method="post" action="javascript:void(0)">
                    {{-- TODO: Protección contra CSRF --}}
                        @csrf
                    <div class="form-group">

                        <label for="title">Título</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{$id->title}}">
                    </div>

                    <div class="form-group">

                        <label for="title">Año</label>
                        <input type="number" name="year" id="year" class="form-control" value="{{$id->year}}">
                    </div>

                    <div class="form-group">

                        <label for="title">Director</label>
                        <input type="text" name="director" id="director" class="form-control" value="{{$id->director}}">
                    </div>

                    <div class="form-group">

                        <label for="title">Poster</label>
                        <input type="text" name="poster" id="poster" class="form-control" value="{{$id->poster}}">
                    </div>

                    <div class="form-group">
                        <label for="synopsis">Resumen</label>
                        <input type="text" name="synopsis" id="synopsis" class="form-control"  value="{{$id->synopsis}}">
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                            Modificar película                        </button>
                    </div>

                    {{-- TODO: Cerrar formulario --}}
</form>
                </div>
            </div>
        </div>
    </div>
@stop