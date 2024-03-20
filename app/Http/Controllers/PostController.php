<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function Posts(){
        return view('posts', ['posts' => Post::all()]);
    }
}
