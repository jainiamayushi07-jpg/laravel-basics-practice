<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showStudentList(){
        $students=DB::table('students')->get();
        //return $students;
        return view ('StudentList',['studentlist'=>$students]);
    }
    public function showBlog(){
        return view('showblog');
    }
    public function showData(string $id){
        return view('welcome1',compact('id'));

}


}
