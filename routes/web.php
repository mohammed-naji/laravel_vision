<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('show', [PagesController::class, 'show']);

Route::get('dashboard/{type}', [PagesController::class, 'check'])->middleware('checkadmin');

Route::get('/main', [PagesController::class, 'home'])->name('homepageurl');
Route::get('/about-us', [PagesController::class, 'about'])->name('aboutpageurl');
Route::get('/contact-us', [PagesController::class, 'contact'])->name('contactpageurl');
Route::get('/our-services', [PagesController::class, 'services'])->name('servicespageurl');
Route::get('/our-team', [PagesController::class, 'team'])->name('teampageurl');
// Route::get('/about', );
// Route::get('/contact', );
// Route::get('/services', );
// Route::get('/team', );

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
