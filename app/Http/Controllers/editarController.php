<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\post;

class editarController extends Controller
{
    public function editar($id, Request $request){

        if ($request->isMethod('post')) {
            $titulo = $request->input("titulo");
            $subtitulo = $request->input("subtitulo");
            $usuario = $request->input("usuario");
            $fecha = date('Y-m-d');
            $contenido = $request->input("contenido");
            $entrada = Post::findorfail($id);
            $entrada->titulo = $titulo;
            $entrada->subtitulo = $subtitulo;
            $entrada->usuario = $usuario;
            $entrada->fecha = $fecha;
            $entrada->contenido = $contenido;
            $entrada->save();

            return view('editado');
        }else
        {
            $post = Post::findorfail($id);
            return view('editoEntrada')->with('post',$post);
        }
    }
}
