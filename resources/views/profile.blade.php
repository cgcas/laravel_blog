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

    <!-- Main Content -->
    <<div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">

                <div class="welcome">
                    <h1>Bienvenido {{ Auth::user()->name; }}</h1>
                    <a href="{{ route("logout")}}">Cerrar sesión.</a>
                </div>


            </div>
        </div>
    </div>

    <hr>


@stop