<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post;
use App\Model\User;


class posteando extends Controller
{
    public function verPost($id){

        $post = Post::findOrFail($id);
        if(!$post){
          echo "ERROR";
        }
        $usuario = $post->user;

        if (!$usuario) {
            echo "no hay usuario";
        }

        return view('post',['post' => $post,'usuario' => $usuario]);
    }
}
