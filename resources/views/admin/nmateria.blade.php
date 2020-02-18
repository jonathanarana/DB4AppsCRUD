@extends('layouts.app')

@section('content')

    <div class="columns is-marginless is-centered">
        <div class="column is-5">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">Nueva Materia</p>
                </header>

                <div class="card-content">
                    <form class="register-form" method="POST" action="">

                        {{ csrf_field() }}

                        <div class="field is-horizontal">
                            <div class="field-label">
                                <label class="label">Nombre</label>
                            </div>

                            <div class="field-body">
                                <div class="field">
                                    <p class="control">
                                        <input class="input" type="name" name="nombre" required autofocus>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="field is-horizontal">
                            <div class="field-label">
                                <label class="label">Maestro</label>
                            </div>

                            <div class="field-body">
                                <div class="field">
                                    <p class="control">
                                        <select class="input" name="maestro">
                                          @foreach ($maestros as $maestro)
                                            <option value="{{$maestro->id}}">{{$maestro->name}}</option>
                                          @endforeach
                                        </select>
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="field is-horizontal">
                            <div class="field-label"></div>

                            <div class="field-body">
                                <div class="field is-grouped">
                                    <div class="control">
                                        <button type="submit" class="button is-primary">Registrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
