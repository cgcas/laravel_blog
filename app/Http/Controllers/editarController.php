<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post;
use App\Model\User;

class editarController extends Controller
{
    public function editar($id, Request $request){

        if ($request->isMethod('post')) {
            $titulo = $request->input("titulo");
            $subtitulo = $request->input("subtitulo");
            $fecha = date('Y-m-d');
            $contenido = $request->input("contenido");
            $entrada = Post::findOrFail($id);
            $entrada->titulo = $titulo;
            $entrada->subtitulo = $subtitulo;
            $entrada->fecha = $fecha;
            $entrada->contenido = $contenido;
            $entrada->save();

            return redirect()->route('inicio');
        }else
        {
            $post = Post::findOrFail($id);
            return view('editoEntrada')->with('post',$post);
        }
    }
}
