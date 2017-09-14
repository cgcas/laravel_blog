<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class post extends Controller
{
    public function verPost($id){
        switch ($id){
            case 1:
                return view('layoutpost1');
                break;
            case 2:
                return view('layoutpost2');
                break;
            case 3:
                return view('layoutpost3');
                break;
            case 4:
                return view('layoutpost4');
                break;
        }

    }
}
