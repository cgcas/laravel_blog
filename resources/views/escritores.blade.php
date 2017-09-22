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
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

          @foreach($escritores as $escritor)
            <div class="post-preview">
             <a href="escritor/{{ $escritor->id }}">
               <h2 class="post-title">
                  {{ $escritor->nombre }}
                </h2>
            </div>
            <hr>
          @endforeach

        </div>
      </div>
    </div>

    <hr>


@stop