<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SingleActionController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
})->name('about-us');

Route:: get('/post',function() {
    return view('post');
});

Route::get('/test',function(){
    return view('test');
});

Route::get('/users',function(){
    $names=[
        1=>['name'=>'Ayushi','phone'=>'9408552872'],
        2=>['name'=>'Ami','phone'=>'7320991268']
    ];
    return view('users',['user1'=>$names]);


});


Route::get('/user', [UserController::class,'showUser'])->name('data');
Route::get('/user/{id}',[UserController::class,'showData']);
Route::get('/actioncontroller',SingleActionController::class);


// Route::redirect('/about','/test');
