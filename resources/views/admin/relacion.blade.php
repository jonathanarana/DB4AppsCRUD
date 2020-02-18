@extends('layouts.app')

@section('content')
<div class="container">
    <div class="columns is-marginless is-centered">
        <div class="column">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">lista de inscritos</p>
                </header>

                <div class="card-content">

                    <table class="table is-fullwidth is-bordered is-striped">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Nombre</th>
                          <th>Matricula</th>
                          <th>Calificacion</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($relacion as $user)
                          <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->matricula}}</td>
                            <td>
                              @if ($user->calificacion)
                                {{$user->calificacion}}
                              @else
                                <a href="/calificar/{{$user->id}}" class="button is-link">calificar</a>
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
