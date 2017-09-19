<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\post;

class posteando extends Controller
{
    public function verPost($id){

        $post = Post::findorfail($id);
        $usuario = Post::find($id)->User;

        return view('post',['post' => $post,'usuario' => $usuario]);
    }
}
