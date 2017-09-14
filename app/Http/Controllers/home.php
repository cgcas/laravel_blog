<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home extends Controller
{
    public function verHome(){
        return view('layouthome');
    }
}
