<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post;

class buscar_controller extends Controller
{
    public function buscar(Request $request)
    {

        $cadena_titulo = $request->input("cadena_titulo");
        $cadena_contenido = $request->input("cadena_contenido");


        $num_res = Post::where('titulo', 'like', "%$cadena_titulo%")->orWhere('contenido', 'like', "%$cadena_contenido%")->count();
        if ($num_res == 0) {
            return view('busqueda')->with('sincoincidencias', 'sincoincidencias');
        } else {
            $resultado = Post::where('titulo', 'like', "%$cadena_titulo%")->orWhere('contenido', 'like', "%$cadena_contenido%")->paginate(1);
            return view('busqueda', ['entradas' => $resultado, 'numeroEntradas' => $num_res,'cadena_titulo' => $cadena_titulo,'cadena_contenido' => $cadena_contenido]);
        }
    }
}
