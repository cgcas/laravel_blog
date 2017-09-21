<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post;

class borrarController extends Controller
{
    public function borrar($id){

        $post = Post::find($id);

        if(!$post)
        {
            abort(404);
        }
        $usuario = $post->user;
        $usuario->delete();
        $post->delete();
        return redirect()->route('inicio');
    }
}
