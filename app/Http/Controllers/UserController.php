<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showUser(){
        $message = "hello";
        return $message;
    }
    public function showData(string $id){
        return view('welcome1',compact('id'));
}
}
