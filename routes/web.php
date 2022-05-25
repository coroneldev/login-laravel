<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::view('/', 'welcome');
Route::view('login', 'login')->name('login')->middleware('guest');
Route::view('dashboard', 'dashboard')->middleware('auth');

Route::post('login', function(){
    $credentials = request()->only('email', 'password');
  //  dump($credentials);
  if(Auth::attempt($credentials))
  {
      request()->session()->regenerate();
      //return 'You are logued in !';
      return redirect('dashboard');
  }
  //return 'Login failed';
  return redirect('login');
});