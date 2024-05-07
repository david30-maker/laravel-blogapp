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

    // Store Post
    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $post = new Post;

            $file_name =time() . '.' . request()->iage->getClientOriginalExtension();
            request()->image->move(public_path('image'), $file_name);

            $post->title = $request->title;
            $post->description = $request->description;
            $post->image = $file_name;

            $post->save();
            return redirect()->route('posts.index')->with('success', "Post created successfuly.");
    }
}
