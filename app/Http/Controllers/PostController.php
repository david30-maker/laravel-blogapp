<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Models\Post;

class PostController extends Controller
{
    public function index() {
        $post = "Laravel Tutorial Series One!";
        return view('posts.index', ['post'=>$post]);
    }
}
