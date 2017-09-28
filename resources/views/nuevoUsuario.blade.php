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
            @if(isset($error))
                <h2>{{ $error }}</h2>
            @endif

            @if(isset($acierto))
                <h2>{{ $acierto }}</h2>
            @else
                <form class="form-horizontal" action="{{ route('nuevoUsuario')}}" method="post">
                    {{ csrf_field() }}
                    <fieldset>
                        <div id="legend">
                            <legend class="">Register</legend>
                        </div>
                        <div class="control-group">
                            <!-- Username -->
                            <label class="control-label"  for="username">Username</label>
                            <div class="controls">
                                <input type="text" id="username" name="username" value="{{ $datos['username'] }}" class="input-xlarge">
                                <p class="help-block">Username can contain any letters or numbers, without spaces</p>
                            </div>
                        </div>

                        <div class="control-group">
                            <!-- E-mail -->
                            <label class="control-label" for="email">E-mail</label>
                            <div class="controls">
                                <input type="text" id="email" name="email" value="{{ $datos['email'] }}" class="input-xlarge">
                                <p class="help-block">Please provide your E-mail</p>
                            </div>
                        </div>

                        <div class="control-group">
                            <!-- Password-->
                            <label class="control-label" for="password">Password</label>
                            <div class="controls">
                                <input type="password" id="password" name="password" value="{{ $datos['password'] }}" class="input-xlarge">
                                <p class="help-block">Password should be at least 4 characters</p>
                            </div>
                        </div>

                        <div class="control-group">
                            <!-- Password -->
                            <label class="control-label"  for="password_confirm">Password (Confirm)</label>
                            <div class="controls">
                                <input type="password" id="password_confirm" name="password_confirm" value="{{ $datos['password_confirm'] }}" class="input-xlarge">
                                <p class="help-block">Please confirm password</p>
                            </div>
                        </div>

                        <div class="control-group">
                            <!-- Button -->
                            <div class="controls">
                                <input type="submit" class="btn btn-success" value="Register" />
                            </div>
                        </div>
                    </fieldset>
                </form>

            @endif

        </div>
      </div>
    </div>

    <hr>


@stop