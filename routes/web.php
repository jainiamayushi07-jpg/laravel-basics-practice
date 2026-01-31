<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aboutsss', function () {
    return view('about');
})->name('about-us');

Route:: get('/post',function() {
    return view('post');
});
