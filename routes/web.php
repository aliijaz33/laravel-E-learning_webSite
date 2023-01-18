<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Learn;
use App\Http\Controllers\Users;
use Illuminate\Contracts\Session\Session;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('login');
});
Route::get('logout', function () {
    if(session()->has('user')){
        session()->pull('user');
    }
    return redirect('login');
});
Route::get('course', [Learn::class, 'course']);
Route::get('quiz', [Learn::class, 'quiz']);
Route::get('result', [Learn::class, 'result']);
Route::get('list', [Users::class, 'list']);
Route::get('delete/{id}', [Users::class, 'delete']);
Route::get('profile', [Learn::class, 'profile']);
Route::get('home', [Learn::class, 'home']);
Route::get('login', [Users::class, 'login']);
Route::get('create', [Users::class, 'create']);
Route::view('home', 'home');

Route::post('createsubmit', [Users::class, 'createsubmit']);
Route::post('loginsubmit', [Users::class, 'submit']);