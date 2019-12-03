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
// Route::get('/index', 'HomeController@toViewHome');
//
// Route::get('/login', 'UserController@toViewLogin');
// Route::post('/login', 'UserController@login');
// Route::get('/register', 'UserController@toViewRegister');
// Route::post('/register', 'UserController@register');
//
// Route::get('/home', function(){
//   return view('home');
// });
 Route::get('/faq', function () {
     return view('faq');
 });
Route::get('/envios', function(){
   return view('envios');
 });
 Route::get('/pagos', function(){
  return view('pagos');
 });
Route::get('/contacto', function(){
   return view('contacto');
 });
//
// Route::get('/user-profile', function(){
//   return view('user-profile');
// });
// Route::get('/newarticulo', function(){
//   return view('newarticulo');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
