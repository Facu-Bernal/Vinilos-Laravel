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

Route::get('/home', 'VinilosController@home');

Route::get('/', 'VinilosController@home');

// Vinilos por categorias

Route::get('/vinilos', 'VinilosController@listarVinilos');

Route::get('/cocina', 'VinilosController@cocina');

Route::get('/living', 'VinilosController@living');

Route::get('/dormitorio', 'VinilosController@dormitorio');

Route::get('/infantil', 'VinilosController@infantil');

// Alta, modificar y eliminar Vinilos

Route::get('/agregarVinilo', 'VinilosController@agregarVinilo');

Route::post('/guardarAltaVinilo', 'VinilosController@guardarAltaVinilo');

Route::post('/guardarModiVinilo', 'VinilosController@guardarModiVinilo');

Route::post('/modificarVinilo', 'VinilosController@modificarVinilo');

Route::post('/eliminarVinilo', 'VinilosController@eliminarVinilo');


// Usuarios

Route::get('/perfil', 'UserPerfilController@showperfil');

Route::post('/updateData', 'UserPerfilController@updateData');

//Carrito
Route::get('cart', 'VinilosController@cart');

Route::get('add-to-cart/{id}', 'VinilosController@addToCart');

Route::patch('update-cart', 'VinilosController@update');

Route::delete('remove-from-cart', 'VinilosController@remove');


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
