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


  @if(@isset($incorrecto))
    <p>Hay que hacer las busquedas bien...</p>
  @elseif(@isset($sincoincidencias))
    <h1>No hay coincidencias en la busqueda realizada...</h1>
  @else
      <h2>Coincidencias:</h2>
      <ul>
      @foreach ($resultado as $value)
       <li><a href="post/{{ $value->id }}"> {{ $value->titulo }}</a></li>
      @endforeach
      </ul>
  @endif
@stop
