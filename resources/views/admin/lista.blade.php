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
                          <th>Correo</th>
                          <th>Matricula</th>
                          <th>Opciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($users as $user)
                          <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->matricula}}</td>
                            <td>
                              <a href="/editar/{{$user->id}}" class="button is-link">Editar</a>
                              @if ($user->roll==3)
                                <a href="/inscribir/{{$user->id}}" class="button is-link">Inscribir</a>
                                <a href="/calificaciones/{{$user->id}}" class="button is-link">Calificaciones</a>
                              @endif
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
