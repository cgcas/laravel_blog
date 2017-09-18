<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\post;

class nuevaEntradaController extends Controller
{
    public function alta(Request $request){

        if ($request->isMethod('post')) {
            $titulo = $request->input("titulo");
            $subtitulo = $request->input("subtitulo");
            $usuario = $request->input("usuario");
            $fecha = date('Y-m-d');
            $contenido = $request->input("contenido");
            $entrada = new Post;
            $entrada->titulo = $titulo;
            $entrada->subtitulo = $subtitulo;
            $entrada->usuario = $usuario;
            $entrada->fecha = $fecha;
            $entrada->contenido = $contenido;
            $entrada->save();

            return view('entro');
        }else
        {
            return view('altaEntrada');
        }
    }
}
