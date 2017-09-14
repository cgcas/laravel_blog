<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\post;

class posteando extends Controller
{
    public function verPost($id){

        $posts = Post::all();

        foreach ($posts as $post) {
            if ($post['id']== $id){
                return view('post')->with('post', $post);
            }
        }

    }
}
