<?php

use Illuminate\Support\Facades\Route;

Route::prefix('adminpanel')->group(function () {

    Route::get('/home', function() {
        return 'Admin Home';
    });

    Route::get('/page1', function() {
        return 'Admin Home';
    });

    Route::get('/page2', function() {
        return 'Admin Home';
    });

    Route::get('/page3', function() {
        return 'Admin Home';
    });

    Route::get('/page4', function() {
        return 'Admin Home';
    });

});


// Route::group(['prefix' => 'admin'], function() {

// });
