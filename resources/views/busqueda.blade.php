@extends('home')


@section('busqueda')

  @if(@isset($sincoincidencias))
      <div class="container">
          <div class="row">
              <div class="col-lg-8 col-md-10 mx-auto">
                  <div class="post-preview">
                    <h2>No hay coincidencias en la busqueda realizada...</h2>
                  </div>
              </div>
          </div>
      </div>

  @else
    <h1>Se han encontrado un número de {{ $numeroEntradas }} entradas:</h1>
  @endif
@stop
