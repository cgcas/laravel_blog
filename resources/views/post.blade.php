@extends('layout')


@section('content')

  <!-- Page Header -->

  <header class="masthead" style="background-image: url({{ asset('img/post-bg.jpg')}})">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1>{{ $post->titulo }}</h1>
            <h2 class="subheading">{{ $post->subtitulo }}</h2>
            <span class="meta">Posted by
                <a href="{{route("inicio")}}">{{ $post->usuario }}</a>
                on {{ $post->fecha }}</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!--Post Content-->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          {{ $post->contenido }}
        </div>
      </div>
    </div>
  </article>

  <hr>
@stop