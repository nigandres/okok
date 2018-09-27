@extends('layouts.apu')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  Dashboard
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                  <h1>Registro de nuevo alumno</h1><br>
                  <form action="{{ action('AlumnoController@store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                      <label class="col-form-label" for="nombre">nombre</label>
                      <input class="form-control" name="nombre" type="text" placeholder="introdusca su nombre">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label" for="codigo">Seccion</label>
                      <input class="form-control" name="codigo" type="text" placeholder="introdusca su codigo">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label" for="carrera">Calendario</label>
                      <input class="form-control" name="carrera" type="text" placeholder="introdusca su carrera">
                    </div>
                    <div class="tile-footer">
                      <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
