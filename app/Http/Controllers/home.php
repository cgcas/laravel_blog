<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\post;

class home extends Controller
{
    public function verHome(){
        $entradas=Post::all();

        return view('home')->with('entradas',$entradas);
    }
}
