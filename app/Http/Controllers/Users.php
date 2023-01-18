<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Quiz;
use App\Models\Result;


use Illuminate\Support\Facades\Hash;

use Session;
class Users extends Controller
{
    //
    function list(){
        $user = User::all();
        return view('userlist', ['user'=>$user]);
    }
    function delete($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('status' , 'Deleted');
    }
    
    function create(){
        return view('signup');
    }
    function login(){
        return view('login');
    }
    
    
    function submit(Request $req){
        $email = $req->input('email');
        $password = $req->input('password');

        $user = User::select('name', 'email', 'password')->where(
            [
                ['email', '=' , $email ],
                ['password' , '=' , $password ]
            ]
        )->first();

        if ($user){
            $req->session()->put('user', $user);
                return redirect('home');
        }
        else {
            return "Invalid Email or Password";
        };
        // $data = $req->input('email', 'password');
        // $req->session()->put('logData', $data);
        // //echo session('logData');
        // return redirect('home');
        //return $req->input();
       // (!$user || Hash::check($req->password, $user->password))
        // $user = User::where(['email' => $req->email, 'password' => $req->password])->first();
        // if ($user->email != $req->email || $user->password != $req->password){
        //     return "user invalid";
        // }
        // else{
        //     $req->session()->put('user', $user);
        //     return redirect('home');
        // }
    }
    function createsubmit(Request $req){
        {
            $user = new User;
            $user->name = $req->name;
            $user->email = $req->email;
            $user->password = $req->password;
            $result = $user->save();

            if($result){
                return redirect('login');
            }
        }
    }
}