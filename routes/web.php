<?php

use App\Http\Controllers\AgencyController;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Site2Controller;
use App\Http\Controllers\CreativeController;
use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PostController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


// CRUD Application for posts
Route::get('posts', [PostController::class, 'index']);

Route::get('posts/delete/{id}', [PostController::class, 'delete'])->name('delete');

Route::get('posts/create', [PostController::class, 'create'])->name('create');


Route::get('db', [DatabaseController::class, 'index']);
Route::post('db', [DatabaseController::class, 'save'])->name('save');




Route::prefix('agency')->name('agency.')->group(function() {
    Route::get('/', [AgencyController::class, 'index'])->name('index');

    Route::get('/services', [AgencyController::class, 'services'])->name('services');

    Route::get('/portfolio', [AgencyController::class, 'portfolio'])->name('portfolio');

    Route::get('/about', [AgencyController::class, 'about'])->name('about');

    Route::get('/team', [AgencyController::class, 'team'])->name('team');

    Route::get('/contact', [AgencyController::class, 'contact'])->name('contact');
    Route::post('/contact', [AgencyController::class, 'contactSubmit'])->name('contactSubmit');
});


Route::get('mail', function() {
    Mail::to('moh@gmail.com')->send(new TestMail);
});


Route::get('form', [FormController::class, 'index']);
Route::post('form', [FormController::class, 'formSubmit'])->name('formSubmit');


Route::get('form2', [FormController::class, 'form2']);
Route::post('form2', [FormController::class, 'form2Submit'])->name('form2Submit');

Route::get('form3', [FormController::class, 'form3']);
Route::post('form3', [FormController::class, 'form3Submit'])->name('form3Submit');

Route::get('form4', [FormController::class, 'form4']);
Route::post('form4', [FormController::class, 'form4Submit'])->name('form4Submit');



Route::get('creative', [CreativeController::class, 'index']);

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
Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{

    Route::prefix('portfolio')->group(function() {
        Route::get('/', [PortfolioController::class, 'index'])->name('porthome');
        Route::get('/about', [PortfolioController::class, 'about'])->name('portabout');
        Route::get('/contact', [PortfolioController::class, 'contact'])->name('portcontact');
        Route::post('/contact', [PortfolioController::class, 'contactSubmit'])->name('contactSubmit');
    });

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
