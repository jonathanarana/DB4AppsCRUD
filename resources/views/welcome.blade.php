<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Universidad</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style media="screen">
          html {
            background: url('/images/p15.jpg');
            background-size: cover;
          }
        </style>
    </head>
    <body>
        <div class="conatiner">
            @if (Route::has('login'))
              <nav class="navbar is-dark" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="/">
      inicio
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">


    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          @if (Auth::check())
              <a href="{{ url('/home') }}" class="button is-light">Home</a>
          @else
              <a href="{{ url('/login') }}" class="button is-light">Ingresa</a>
          @endif
        </div>
      </div>
    </div>
  </div>
</nav>



            @endif
            <div class="content">

            </div>
        </div>
    </body>
</html>
