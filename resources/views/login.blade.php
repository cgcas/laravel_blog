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

                <form action="{{ route("login")}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="email">Email:</label>
                        <div class="col-md-4">
                            <input id="email" name="email" class="form-control input-md" type="email">
                        </div>
                    </div>
                    <br />
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="pass">Contraseña:</label>
                        <div class="col-md-4">
                            <input id="pass" name="pass" class="form-control input-md" type="password">
                        </div>
                    </div>
                    <br />
                    <div class="form-group">
                        <div class="col-md-4">
                            <button id="entrar" name="entrar" class="btn btn-primary">Login</button>
                        </div>
                    </div>
                </form>


            </div>
          </div>
        </div>
    <hr>


@stop