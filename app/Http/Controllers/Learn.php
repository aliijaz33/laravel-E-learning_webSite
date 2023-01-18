<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Termwind\Components\Li;

class Learn extends Controller
{
    //
    function home(){
        return view('home');
    }
    function course(){
        return view('myCourses');
    }
    function quiz(){
        // $sessionValue = session()->get('user');
        // if($sessionValue){
        //     $userName = $sessionValue['email'];
        // }
        $dbValue = DB::table('users')
        ->join('results','users.id', "=" , 'results.user_id')
        ->join('quizes', 'results.quiz_id' , "=" , 'quizes.quiz_id')
        ->join('courses', 'quizes.course_id' , "=" , 'courses.course_id')
        ->get();

        // $name = $userName;
        // $getName = null;
        // foreach($dbValue as $db){
        //     if ($db->email == $name){
        //         $getName = $db;
        //          $getName;
        //     }
        // }
        return view('quiz', ['score'=>$dbValue]);
    }
    function result(){
        $score = DB::table('users')
        ->join('results','users.id', "=" , 'results.user_id')
        ->join('quizes', 'results.quiz_id' , "=" , 'quizes.quiz_id')
        ->join('courses', 'quizes.course_id' , "=" , 'courses.course_id')
        ->get();
        return view('result', ['score'=>$score]);
    }
    function profile(){
        
        $score = DB::table('users')
        ->join('results','users.id', "=" , 'results.user_id')
        ->where('users.id', 1)
        ->get();
        return view('profile');

        // return $score->'score';
    }
    
}