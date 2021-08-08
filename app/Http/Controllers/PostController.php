<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function index() {

        // $posts = Post::all(); // get all data from database
        // $posts = Post::latest('id')->paginate(10); // get all data from database
        $posts = Post::orderBy('id', 'desc')->paginate(10); // get all data from database
        return view('posts.index', compact('posts')); // return to the view with the posts variable
    }


    public function delete($id)
    {
        Post::find($id)->delete();
        return redirect()->back();
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required|min:10|max:191',
            'body' => 'required'
        ]);

        // Post::create();
        // $post = new Post(); // create new post with empty values
        // $post->title = $request->title; // add title to the empty post
        // $post->body = $request->body; // add body to the empty post
        // $post->save();

        Post::create([
            'title' => $request->title,
            'body' => $request->body,
        ]);

        return redirect('/posts')->with('success', 'Post Added Successfully');
    }

    public function edit($id) {
        // return $id;
        $post = Post::find($id);
        // return $post;
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id) {
        // $request->validate([
        //     'title' => 'required|min:10|max:191',
        //     'body' => 'required'
        // ]);

        Post::find($id)->update([
            'title' => $request->title,
            'body' => $request->body,
        ]);

        return redirect('/posts')->with('success', 'Post Updated Successfully');
    }

}
