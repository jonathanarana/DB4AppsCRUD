@extends('layouts.app')

@section('content')
<div class="container">
    <div class="columns is-marginless is-centered">
        <div class="column">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">inscribir a {{$user->name}}</p>
                </header>

                <div class="card-content">
                  <form class="" action="" method="post">
                    {{ csrf_field() }}
                    <label for="">Materia:</label>
                    <select class="input" name="materia">
                      @foreach ($materias as $materia)
                        <option value="{{$materia->id}}">{{$materia->nombre}}</option>
                      @endforeach
                    </select>
                    <input type="submit" value="Inscribir" class="button is-success">
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
