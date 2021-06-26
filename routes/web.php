<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/home', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/services', [PageController::class, 'services']);
Route::get('/team', [PageController::class, 'team']);


Route::get('/', function() {
    // return 'Homepage';
    return view('welcome');
});

// Route::get('/', [PageController::class, 'index']);

// Route::get('/user/{name}', function($name = '') {
//     return 'Welcome ' . $name;
// });

// Route::get('/user', function(){
//     return 'Welcome';
// });

// Route::get('/user/{name?}', function($name = '') {
//     return 'Welcome ' . $name;
// });


// Route::get('user/profile', function() {
//     return view('profile');
// });
