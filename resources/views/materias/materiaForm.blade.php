@extends('layouts.apa')

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
                  <h1>Registro de nueva materia</h1><br>
                  <form action="{{ action('MateriaController@store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                      <label class="col-form-label" for="crn">CRN</label>
                      <input class="form-control" name="crn" type="text" placeholder="introdusca el CRN de la materia">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label" for="seccion">Seccion</label>
                      <input class="form-control" name="seccion" type="text" placeholder="introdusca la seccion de la materia">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label" for="calendario">Calendario</label>
                      <input class="form-control" name="calendario" type="text" placeholder="introdusca el calendario">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label" for="materia">Materia</label>
                      <input class="form-control" name="materia" type="text" placeholder="introdusca la materia">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label" for="horainicio">Hora de inicio</label>
                      <input class="form-control" name="horainicio" type="text" placeholder="introdusca el horario">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label" for="salon">Salon</label>
                      <input class="form-control" name="salon" type="text" placeholder="introdusca el salon">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label" for="usuario">Usuario</label>
                      <input class="form-control" name="usuario" type="text" placeholder="introdusca el usuario">
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
