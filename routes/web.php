<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\Site2Controller;
use Illuminate\Support\Facades\Route;


Route::get('/album', [PagesController::class, 'album']);


Route::prefix('site2')->group(function() {
    Route::get('/', [Site2Controller::class, 'index'])->name('site2_home');
    Route::get('/about', [Site2Controller::class, 'about'])->name('site2_about');
    Route::get('/team', [Site2Controller::class, 'team'])->name('site2_team');
    Route::get('/contact', [Site2Controller::class, 'contact'])->name('site2_contact');
    Route::get('/faq', [Site2Controller::class, 'faq'])->name('site2_faq');
    Route::get('/services', [Site2Controller::class, 'services'])->name('site2_services');
});










// Route::get('protfolio', );
// Route::get('protfolio/about', );
// Route::get('protfolio/contact', );

Route::prefix('portfolio')->group(function() {
    Route::get('/', [PortfolioController::class, 'index'])->name('porthome');
    Route::get('/about', [PortfolioController::class, 'about'])->name('portabout');
    Route::get('/contact', [PortfolioController::class, 'contact'])->name('portcontact');
});


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
