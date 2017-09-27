<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

class idiomaController extends Controller
{
    public function cambioIdioma($locale)
    {
        App::setLocale($locale);

        return view('nuevoIdioma',['idioma'=>$locale]);
    }
}
