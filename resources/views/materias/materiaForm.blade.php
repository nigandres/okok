@extends('layouts.apa')

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
                  <form action="/materia/store" method="post">
                    <h1>materia</h1><br>
                    <input type="text" name="materia">
                    <input type="submit" values="nepe">
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
