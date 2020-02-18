@extends('layouts.app')

@section('content')
<div class="container">
    <div class="columns is-marginless is-centered">
        <div class="column">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">lista de Calificaiones de {{$user->name}}</p>
                </header>

                <div class="card-content">
                    <table class="table is-fullwidth is-bordered is-striped">
                      <thead>
                        <tr>
                          <th>Materia</th>
                          <th>Calificacion</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($materias as $materia)
                          <tr>

                            <td>{{$materia->nombre}}</td>
                            <td>{{$materia->calificacion}}</td>

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
