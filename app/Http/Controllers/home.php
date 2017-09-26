<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\post;
use App\locale;

class home extends Controller
{
    public function verHome($locale){
        App::setLocale($locale);

        $entradas=Post::paginate(2);

        return view('home')->with('entradas',$entradas);
    }
}
