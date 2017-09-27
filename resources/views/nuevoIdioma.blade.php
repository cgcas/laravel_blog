@extends('layout')


@section('content')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url({{ asset('img/home-bg.jpg')}})">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Clean Blog</h1>
              <span class="subheading">A Blog Theme by Start Bootstrap</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    @yield('busqueda')

    <!-- Main Content -->
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                @if($idioma=="en")
                    <h2>Welcome</h2>
                @else
                    <h2>Bienvenido</h2>
                @endif
            </div>
          </div>
        </div>


    <hr>


@stop