<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post;
use App\Model\User;


class BlogController extends Controller
{
    public function listarEscritores(){
            $escritores=User::all();

            return view('escritores')->with('escritores',$escritores);
    }

    public function listarEntradasEscritor($id){
        $entradas = User::find($id)->Post;

        if(!$entradas)
        {
            abort(404);
        }

        return view('escritor',['entradas'=>$entradas]);
    }
}
