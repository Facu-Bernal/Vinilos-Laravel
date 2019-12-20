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

Auth::routes();

// Vinilos

Route::get('/home', 'VinilosController@lista');

Route::get('/', 'VinilosController@lista');

 Route::get('/cocina', 'VinilosController@cocina');

Route::get('/living', 'VinilosController@living');

Route::get('/dormitorio', 'VinilosController@dormitorio');

Route::get('/infantil', 'VinilosController@infantil');

Route::post('/eliminarVinilo', 'VinilosController@borrarVinilo');

Route::post('/modificarVinilo', 'VinilosController@modificarVinilo');

Route::get('/agregarVinilo', 'VinilosController@agregarVinilo');

Route::get('/vinilos', 'VinilosController@listarVinilos');

Route::post('/guardarViniloModificado', 'VinilosController@guardarViniloModificado');

// Usuarios

Route::get('/perfil', 'UserPerfilController@showperfil');

Route::post('/updateData', 'UserPerfilController@updateData');



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

Route::get('/carrito', function(){
 return view('carrito');
});
