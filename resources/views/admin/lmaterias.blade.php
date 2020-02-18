@extends('layouts.app')

@section('content')
<div class="container">
    <div class="columns is-marginless is-centered">
        <div class="column">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">lista de personas</p>
                </header>

                <div class="card-content">
                    <table class="table is-fullwidth is-bordered is-striped">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Nombre</th>
                          <th>Maestro</th>
                          <th>Opciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($materias as $materia)
                          <tr>
                            <td>{{$materia->id}}</td>
                            <td>{{$materia->nombre}}</td>
                            <td>{{$materia->maestro}}</td>
                            <td>
                              @if (Auth::user()->roll==1)
                                <a href="/editarm/{{$materia->id}}" class="button is-link">Editar</a>
                              @endif
                              <a href="/relacion/{{$materia->id}}" class="button is-link">Alumnos</a>
                            </td>
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
