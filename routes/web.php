<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
})->name('about-us');

Route:: get('/post',function() {
    return view('pages.post');
});


// Route::redirect('/about','/test');
