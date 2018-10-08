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
                  <h1>Que onda perros</h1>
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
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($user->materias as $materia)
                        <tr>
                          <td>{{ $materia->id }}</td>
                          <td>{{ $materia->crn }}</td>
                          <td>{{ $materia->seccion }}</td>
                          <td>{{ $materia->calendario }}</td>
                          <td>{{ $materia->materia }}</td>
                          <td>{{ $materia->hora_inicio }}</td>
                          <td>{{ $materia->salon }}</td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
