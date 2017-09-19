<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\post;

class borrarController extends Controller
{
    public function borrar($id){

        $post = Post::findorfail($id);
        $post->delete();
        return redirect()->route('inicio');
    }
}
