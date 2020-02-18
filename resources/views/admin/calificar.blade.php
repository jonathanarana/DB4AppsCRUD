@extends('layouts.app')

@section('content')
<div class="container">
    <div class="columns is-marginless is-centered">
        <div class="column">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">Calificar</p>
                </header>

                <div class="card-content">
                  <form class="" action="" method="post">
                    {{ csrf_field() }}
                    <label for="">Calificacion:</label>
                    <input type="number" name="calificacion" value="7" class="input">
                    <input type="submit" value="Calificar" class="button is-success">
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
