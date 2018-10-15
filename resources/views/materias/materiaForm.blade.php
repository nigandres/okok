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
                  @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif
                  @if(isset($materia))
                  {!! Form::model($materia, ['action' => ['MateriaController@update',$materia], 'method' => 'patch']) !!}
<!--                   <form action="{{ action('MateriaController@update',$materia) }}" method="post"> -->
<!--                     <input type="hidden" name="_method" value="put"> -->
                  @else
                  {!! Form::open(['action' => 'MateriaController@store']) !!}
<!--                   <form action="{{ action('MateriaController@store') }}" method="post"> -->
<!--                     {{ csrf_field() }} -->
                  @endif
                    <div class="form-group">
                      <label class="col-form-label" for="crn">CRN</label>
                      {!! Form::text('crn', null, ['class' => 'form-control', 'placeholder' => 'Escriba el nombre del crn']); !!}
                      <small class="form-text text-muted">Sus alumnos se podrán inscribir a su materia.</small>
                    </div>
                    <div class="form-group">
                      <label class="col-form-label" for="seccion">Seccion</label>
                      {!! Form::text('seccion', null, ['class' => 'form-control', 'placeholder' => 'introdusca la seccion de la materia']); !!}
                      <small class="form-text text-muted">introdusca la seccion de la materia.</small>
                    </div>
                    <div class="form-group">
                      <label class="col-form-label" for="calendario">Calendario</label>
                      {!! Form::text('calendario', null, ['class' => 'form-control', 'placeholder' => 'introdusca el calendario']); !!}
                      <small class="form-text text-muted">introdusca el calendario.</small>
                    </div>
                    <div class="form-group">
                      <label class="col-form-label" for="materia">Materia</label>
                      {!! Form::text('materia', null, ['class' => 'form-control', 'placeholder' => 'introdusca la materia']); !!}
                      <small class="form-text text-muted">introdusca la materia.</small>
                    </div>
                    <div class="form-group">
                      <label class="col-form-label" for="hora_inicio">Hora de inicio</label>
                      {!! Form::text('hora_inicio', null, ['class' => 'form-control', 'placeholder' => 'introdusca el horario']); !!}
                      <small class="form-text text-muted">introdusca el horario.</small>
                    </div>
                    <div class="form-group">
                      <label class="col-form-label" for="salon">Salon</label>
                      {!! Form::text('salon', null, ['class' => 'form-control', 'placeholder' => 'introdusca el salon']); !!}
                      <small class="form-text text-muted">introdusca el salon.</small>
                    </div>
                    <div class="form-group">
                      <label class="col-form-label" for="user_id">Usuario</label>
                      {!! Form::text('user_id', null, ['class' => 'form-control', 'placeholder' => 'introdusca el usuario']); !!}
                      <small class="form-text text-muted">introdusca el usuario.</small>
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
