<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post;

class buscar_controller extends Controller
{
    public function buscar(Request $request){

        $enviar = $request->input("enviar");

        if($enviar != ""){
            $cadena = $request->input("buscar");
            $num_res = Post::where('titulo','like',"%$cadena%")->orWhere('contenido','like',"%$cadena%")->count();
            if ($num_res == 0){
                return view('busqueda')->with('sincoincidencias', 'sincoincidencias');
            }else {
                $resultado = Post::where('titulo', 'like', "%$cadena%")->orWhere('contenido', 'like', "%$cadena%")->get();
                    return view('busqueda',['entradas' => $resultado, 'numeroEntradas' => $num_res]);
            }
        }
        else {
                abort(404);
        }
    }
}
