<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\post;

class buscar_controller extends Controller
{
    public function buscar(Request $request){

        $enviar = $request->input("enviar");

        if($enviar != ""){
            $cadena = $request->input("buscar");
            $num_res = Post::where('titulo','like',"%$cadena%")->orwhere('contenido','like',"%$cadena%")->count();
                if ($num_res == 0){
                return view('busqueda')->with('sincoincidencias', 'sincoincidencias');
            }else {
                $resultado = Post::where('titulo', 'like', "%$cadena%")->orwhere('contenido', 'like', "%$cadena%")->get();
                return view('busqueda')->with('resultado', $resultado);
            }
        }
        else {
            return view('busqueda')->with('incorrecto', 'incorrecto');
        }
    }
}
