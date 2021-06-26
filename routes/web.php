<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    // return 'Homepage';
    return view('welcome');
});

// http://127.0.0.1:8000/about
// Route::get('/about')

Route::get('/posts', function() {
    return 'Blog Page';
})->name('blogPage');

Route::get('check-route-name' , function(){
    return route('blogPage');
});

Route::get('/blog/{postId}', function($postId) {
    return 'Post ID ' . $postId;
});

// Route::get('/blog/{postId}', function($postId) {
//     return 'Post ID ' . $postId;
// });
// http://127.0.0.1:8000/blog/100/mohammed
Route::get('blog/{id}/{author}', function($id, $author) {
    return 'this is author name : '. $author . ' for post id = ' . $id;
});

Route::get('/about', function() {
    return 'About Page';
});
Route::get('/contact-us', function() {
    return 'Contact Us Page';
});


// Route::get('/user/{name}', function($name = '') {
//     return 'Welcome ' . $name;
// });

// Route::get('/user', function(){
//     return 'Welcome';
// });

Route::get('/user/{name?}', function($name = '') {
    return 'Welcome ' . $name;
});
