<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index() {
        $posts = Post::paginate(2);

        //dd($posts);

        return view('pages.index', [
            'posts' => $posts
        ]);
    }
    
    public function show($id) {
        $post = Post::find($id);

        return view('posts', [
            'post' => $post
        ]);
    }

    public function create() {
        return view('pages.create');
    }

    public function store() {
        $post = new Post();

        $post->title = request('title');
        $post->body = request('body');

        $post->save();

        return redirect('/'); 
    }

    public function edit($id) {
        $post = Post::find($id);
        return view('pages.edit', ['post' => $post]);
    }

    public function update($id) {
        $post = Post::find($id);

        $post->title = request('title');
        $post->body = request('body');

        $post->save();

        return redirect('/post/' . $post->id); 
    }

    public function delete($id) {
        $post = Post::find($id);

        $post->delete();

        return redirect('/');
    }
}
