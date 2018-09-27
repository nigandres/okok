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
                  <h1>Listado de alumnos</h1>
                  <table class="table">
                    <thead>
                      <tr>
                        <td>id</td>
                        <td>nombre</td>
                        <td>codigo</td>
                        <td>carrera</td>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($alumnos as $alumnos)
                        <tr>
                          <td>{{ $alumnos->id }}</td>
                          <td>{{ $alumnos->nombre }}</td>
                          <td>{{ $alumnos->codigo }}</td>
                          <td>{{ $alumnos->carrera }}</td>
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
