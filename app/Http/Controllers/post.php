<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class post extends Controller
{
    public function verPost($id){
        switch ($id){
            case 1:
                return view('post1');
                break;
            case 2:
                return view('post2');
                break;
            case 3:
                return view('post3');
                break;
            case 4:
                return view('post4');
                break;
        }

    }
}
