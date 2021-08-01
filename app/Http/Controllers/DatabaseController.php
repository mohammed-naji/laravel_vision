<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatabaseController extends Controller
{
    public function index() {

        // Query Builder
        // INSERT
        // DB::table('posts')->insert([
        //     'title' => 'First Post',
        //     'content' => 'This is content'
        // ]);

        // Pure SQL
        //DB::insert('insert into posts (title, content) values (?, ?)', ['First Post', 'This is content']);

        // INSERT INTO posts (title, content) VALUES ('First Post', 'This is content')

        // Read data using model
        // $users = User::all();
        // dd($users);


        $posts = Post::select('title')->get();
        //$posts = DB::table('posts')->get();
        foreach($posts as $post) {
            dump($post);
        }
        exit;
        dd($posts);

        // Read
        $posts = DB::table('posts')->get();
        return view('database')->with('posts', $posts);


        // Update
        // DB::table('posts')->where('id', 6)->update([
        //     'title' => 'New New New Title'
        // ]);


        // Delete
        // DB::table('posts')->where('id', 12)->delete();

    }


    public function save(Request $request) {
        // dd($request->all());
        DB::table('posts')->insert([
            'title' => $request->title,
            'content' => $request->content
        ]);

        $posts = DB::table('posts')->get();
        return view('database')->with('posts', $posts);
    }
}
