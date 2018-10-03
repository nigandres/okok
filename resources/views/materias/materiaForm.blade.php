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
                  <h1>Registro de nueva materia</h1><br>
                  
                  @if(isset($materia))
                  {!! Form::model($materia, ['action' => ['MateriaController@update',$materia], 'method' => 'patch']) !!}
<!--                   <form action="{{ action('MateriaController@update',$materia) }}" method="post"> -->
<!--                     <input type="hidden" name="_method" value="put"> -->
                  @else
                  {!! Form::open(['action' => 'MateriaController@store']) !!}
<!--                   <form action="{{ action('MateriaController@store') }}" method="post"> -->
                  @endif
                    {{ csrf_field() }}
                    <div class="form-group">
                      <label class="col-form-label" for="crn">CRN</label>
                      <input class="form-control" name="crn" type="text" placeholder="introdusca el CRN de la materia" value="{{ isset($materia) ? $materia->crn : "" }}">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label" for="seccion">Seccion</label>
                      <input class="form-control" name="seccion" type="text" placeholder="introdusca la seccion de la materia" value="{{ $materia->seccion }}">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label" for="calendario">Calendario</label>
                      <input class="form-control" name="calendario" type="text" placeholder="introdusca el calendario" value="{{ $materia->calendario }}">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label" for="materia">Materia</label>
                      <input class="form-control" name="materia" type="text" placeholder="introdusca la materia" value="{{ $materia->materia }}">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label" for="horainicio">Hora de inicio</label>
                      <input class="form-control" name="horainicio" type="text" placeholder="introdusca el horario" value="{{ $materia->hora_inicio }}">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label" for="salon">Salon</label>
                      <input class="form-control" name="salon" type="text" placeholder="introdusca el salon" value="{{ $materia->salon }}">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label" for="usuario">Usuario</label>
                      <input class="form-control" name="usuario" type="text" placeholder="introdusca el usuario" value="{{ $materia->user_id }}">
                    </div>
                    <div class="tile-footer">
                      <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
<!--                   </form> -->
                  {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
