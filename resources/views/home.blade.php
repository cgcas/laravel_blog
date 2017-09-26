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
    @if(isset($entradas))
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">

              @foreach($entradas as $entrada)
                <div class="post-preview">
                 <a href="post/{{ $entrada->id }}">
                   <h2 class="post-title">
                      {{ $entrada->titulo }}
                    </h2>
                   <h3 class="post-subtitle">
                     {{ $entrada->subtitulo }}
                   </h3>
                  </a>
                  <p class="post-meta">Posted by
                    {{ $entrada->user->nombre }}
                   on {{ $entrada->fecha }}
                   <a href="editar/{{ $entrada->id }}">Editar</a>
                   <a href="borrar/{{ $entrada->id }}">Borrar</a>
                  </p>
                </div>
                <hr>
              @endforeach
              {{ $entradas->links() }}
            </div>
          </div>
        </div>
    @endif

    <hr>


@stop