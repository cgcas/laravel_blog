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

  <form action="{{ route("nuevaEntrada")}}" method="post">
      {{ csrf_field() }}
      <div class="form-group">
          <label class="col-md-4 control-label" for="titulo">Titulo:</label>
          <div class="col-md-4">
              <input id="titulo" name="titulo" class="form-control input-md" type="text">
          </div>
      </div>
      <br />
      <div class="form-group">
          <label class="col-md-4 control-label" for="subtitulo">Subtitulo:</label>
          <div class="col-md-4">
              <input id="subtitulo" name="subtitulo" class="form-control input-md" type="text">
          </div>
      </div>
      <br />
      <div class="form-group">
          <label class="col-md-4 control-label" for="usuario">Usuario:</label>
          <div class="col-md-4">
              <input id="usuario" name="usuario" class="form-control input-md" type="text">
          </div>
      </div>
      <br />
      <div class="form-group">
          <label class="col-md-4 control-label" for="contenido">Contenido:</label>
          <div class="col-md-4">
              <textarea class="form-control" id="contenido" name="contenido"></textarea>
          </div>
      </div>
      <br />
      <div class="form-group">
          <div class="col-md-4">
              <button id="enviar" name="enviar" class="btn btn-primary">Alta</button>
          </div>
      </div>
  </form>

@stop
