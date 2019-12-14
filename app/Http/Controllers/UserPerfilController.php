<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPerfilController extends Controller
{
  public function showperfil(){

     return view('user-profile');

  }

  public function updateData(Request $req){

    $user = find($req["id"]);

    $reglas=[
        'documento' => ['required', 'number', 'max:8'],
        'telefono' => ['required', 'string', 'max:45'],
        'provincia' => ['required', 'string', 'max:45'],
        'localidad' => ['required', 'string', 'max:45'],
        'calle' => ['required', 'string', 'max:45'],
        'numero' => ['required', 'number',  'max:11'],
        'pisoDep' => ['required', 'string','max:45'],
        'codPostal' => ['required', 'string', 'max:45']
    ];

    $mensajes = [
      'required' => "El campo :attribute es requerido",
      'max:45' => "El campo :attribute solo acepta "
    ];

    $this->validate($req, $reglas,$mensajes);


    // cada campo de req va a ser una columna de la tabla
    $user->name = $req["name"];


    $user->save();

  }
}
