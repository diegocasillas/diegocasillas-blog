<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', ['posts' => $posts]);
    }
}