<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\post;
use App\Model\user;

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
            $entrada->fecha = $fecha;
            $entrada->contenido = $contenido;
            $entrada->usuario_id = 0;
            $entrada->save();

            $id = $entrada->id;

            $usuarcillo = new User;
            $usuarcillo->nombre = $usuario;
            $usuarcillo->post_id = $id;
            $usuarcillo->save();

            $usuario_id = $usuarcillo->id;

            $entrada = Post::findOrFail($id);
            $entrada->usuario_id = $usuario_id;
            $entrada->save();


            return redirect()->route('inicio');
        }else
        {
            return view('altaEntrada');
        }
    }
}
