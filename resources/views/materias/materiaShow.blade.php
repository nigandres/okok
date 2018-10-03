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
                  <h1>
                    hola wey{{ $materia->id }}
                  </h1>
                    <!--<div class="form-group">
                      <label class="col-form-label" for="crn">CRN</label>
                      <input class="form-control" name="crn" type="text" placeholder="introdusca el CRN de la materia" value="{{ $materia->crn }}">
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
                    </div>-->
                  <table class="table">
                    <thead>
                      <tr>
                        <td>id</td>
                        <td>crn</td>
                        <td>seccion</td>
                        <td>calendario</td>
                        <td>materia</td>
                        <td>hora_inicio</td>
                        <td>salon</td>
                        <td>user_id</td>
                        <td></td>
                        <td></td>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td>{{ $materia->id }}</td>
                          <td>{{ $materia->crn }}</td>
                          <td>{{ $materia->seccion }}</td>
                          <td>{{ $materia->calendario }}</td>
                          <td>{{ $materia->materia }}</td>
                          <td>{{ $materia->hora_inicio }}</td>
                          <td>{{ $materia->salon }}</td>
                          <td>{{ $materia->user_id }}</td>
                          <td>
                            {!! Form::open(['action' => ['MateriaController@destroy', $materia], 'method' => 'delete']) !!}
<!--                             <form action="{{ action('MateriaController@destroy',$materia) }}" method="post"> -->
<!--                             <form action="{{ route('materia.destroy',$materia->id) }}" method="post"> -->
<!--                               <input type="hidden" name="_method" value="delete"> -->
<!--                               {{ csrf_field() }} -->
                              <input type="submit" class="btn btn-danger" value="Eliminar">
<!--                             </form> -->
                            {!! Form::close() !!}
                          </td>
                          <td>
                            <a href="{{ action('MateriaController@edit',$materia) }}" class="btn btn-info">Modificar</a>
                          </td>
                        </tr>
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
