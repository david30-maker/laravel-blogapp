<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Models\Post;

class PostController extends Controller
{
    public function index() {
        $post = Post::orderBy('created_at', 'desc')->get();
        return view('posts.index', ['post'=>$post]);
    }

    // Create Post
    public function create() {
        return view('posts.create');
    }
}
