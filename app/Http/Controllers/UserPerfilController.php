<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Vinilo;
use App\Categoria;


class UserPerfilController extends Controller
{
  public function showperfil(){
    
    $vinilos = vinilo::all();

    $vac= compact('vinilos');

     return view('user-profile',$vac);

  }

  public function updateData(Request $req){

   $user = User::find($req["id"]);

    $reglas=[
        'Documento' => 'string|max:8|nullable',
        'Telefono' => 'string|max:45|nullable',
        'Provincia' => 'string|max:45|nullable',
        'Localidad' => 'string|max:45|nullable',
        'Domicilio' => 'string|max:45|nullable',
        'Piso/Departamento' => 'string|max:45|nullable',
        'CodigoPostal' => 'string|max:45|nullable'
    ];

    $mensajes = [
      'integer' => "El campo :attribute debe contener solo numeros",
      'max' => "El campo :attribute acepta hasta :max"
    ];


    $this->validate($req, $reglas,$mensajes);

    $user->dni = $req["Documento"];
    $user->telefono = $req["Telefono"];
    $user->provincia = $req["Provincia"];
    $user->localidad = $req["Localidad"];
    $user->domicilio = $req["Domicilio"];
    $user->pisoDep = $req["Piso/Departamento"];
    $user->codPostal = $req["CodigoPostal"];



    $user->save();

    return view("/user-profile");


  }
}
