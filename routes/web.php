<?php

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

<<<<<<< HEAD
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/contacto', function(){
  return view('contacto');
});
Route::get('/home', function(){
  return view('home');
});
Route::get('/register', function(){
  return view('register');
});
Route::get('/login', function(){
  return view('login');
});
Route::get('/user-profile', function(){
  return view('user-profile');
});
=======
Route::get('/', function () {
    return view('main');
});
>>>>>>> 30e910fa173e2bdb4aa1c06928e356765e09162f
