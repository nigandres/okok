@extends('layouts.apu')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
                    hola wey{{ $subject->id }}
                  </h1>
                    <!--<div class="form-group">
                      <label class="col-form-label" for="crn">CRN</label>
                      <input class="form-control" name="crn" type="text" placeholder="introdusca el CRN de la materia" value="{{ $subject->crn }}">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label" for="seccion">Seccion</label>
                      <input class="form-control" name="seccion" type="text" placeholder="introdusca la seccion de la materia" value="{{ $subject->seccion }}">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label" for="calendario">Calendario</label>
                      <input class="form-control" name="calendario" type="text" placeholder="introdusca el calendario" value="{{ $subject->calendario }}">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label" for="materia">Materia</label>
                      <input class="form-control" name="materia" type="text" placeholder="introdusca la materia" value="{{ $subject->materia }}">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label" for="horainicio">Hora de inicio</label>
                      <input class="form-control" name="horainicio" type="text" placeholder="introdusca el horario" value="{{ $subject->hora_inicio }}">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label" for="salon">Salon</label>
                      <input class="form-control" name="salon" type="text" placeholder="introdusca el salon" value="{{ $subject->salon }}">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label" for="usuario">Usuario</label>
                      <input class="form-control" name="usuario" type="text" placeholder="introdusca el usuario" value="{{ $subject->user_id }}">
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
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td>{{ $subject->id }}</td>
                          <td>{{ $subject->crn }}</td>
                          <td>{{ $subject->seccion }}</td>
                          <td>{{ $subject->calendario }}</td>
                          <td>{{ $subject->materia }}</td>
                          <td>{{ $subject->hora_inicio }}</td>
                          <td>{{ $subject->salon }}</td>
                          <td>{{ $subject->user_id }}</td>
                        </tr>
                    </tbody>
                  </table>
                    <form action="{{ action('MateriaController@destroy',$subject) }}" method="post">
                      <!--<input type="hidden" name="_method" value="delete">-->
                      <input type="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
