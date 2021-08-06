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
}
