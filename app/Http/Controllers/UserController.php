<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
  public function toViewLogin(){
    return view('login');
  }

  public function login(Request $req){

   $reglas=[
     "pass"=>"required|min:8",
     "email"=>"required|email"
  ];

  $mensajes=[
    "min"=>"El campo :attribute tiene un minimo de :min",
    "email"=>"El campo :attribute debe tener formato de email(Ej: usuario@dominio.com)"
  ];

  $this->validate($req, $reglas, $mensajes);

  return redirect("/user-profile");

  }

  public function toViewRegister(){
    return view('register');
  }

  public function register(Request $req){


if(!$email){
  $error['email']="Debe ingresar un email.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $error['email']="El email debe tener un formato valido.";
}
if(!$pass){
  $error['pass']="Debe ingresar una contraseña.";
} elseif (strlen($pass)<8) {
  $error['pass']="El password debe tener una longitud minima de 8 caracteres.";
}
if(!$passv){
  $error['passv']="Debe ingresar una contraseña.";
} elseif (strcmp($passv, $pass)!=0) {
  $error['passv']="Las contraseñas no coinciden";
}
       $reglas=[
         "name"=>"required",
         "lastname"=>"required",
         "email"=>"required|email",
         "pass"=>"required|min:8",
         "passv"=>"required|min:8"
      ];

      $mensajes=[
        "min"=>"El campo :attribute tiene un minimo de :min",
        "email"=>"El campo :attribute debe tener formato de email(Ej: usuario@dominio.com)"
      ];

      $this->validate($req, $reglas, $mensajes);

      return redirect("/login");

  }
}
