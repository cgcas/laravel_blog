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

  <div style="text-align: center">
  <form action="{{ route("nuevaEntrada")}}" method="post">
      {{ csrf_field() }}
      <label for="titulo">Titulo: </label>
      <input type="text" name="titulo" id="titulo" />
      <br />
      <label for="subtitulo">Subtitulo: </label>
      <input type="text" name="subtitulo" id="subtitulo" />
      <br />
      <label for="usuario">Usuario: </label>
      <input type="text" name="usuario" id="usuario" />
      <br />
      <label for="contenido">Contenido del Post: </label>
      <textarea name="contenido" id="contenido"></textarea>
      <br />
      <input type="submit" name="enviar" id="enviar" value="Alta" />
  </form>
  </div>
@stop
