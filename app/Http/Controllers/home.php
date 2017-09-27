<?php

namespace App\Http\Controllers;

use App\Model\post;

class home extends Controller
{
    public function verHome(){



        $entradas=Post::paginate(2);

        return view('home')->with('entradas',$entradas);
    }
}
