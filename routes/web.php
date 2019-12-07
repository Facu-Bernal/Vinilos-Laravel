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

Route::get('/vinilos', function (){
    return view('vinilos');
});
Route::get('/cocina', 'VinilosController@cocina');

Auth::routes();

Route::get('/home', 'VinilosController@lista');
