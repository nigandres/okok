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
                      <input class="form-control" name="crn" type="text" placeholder="introdusca el CRN de la materia" value="{{ isset($materia) ? $materia->crn : "" }}">
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
