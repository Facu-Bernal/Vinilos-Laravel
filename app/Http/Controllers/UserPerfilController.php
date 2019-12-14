<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPerfilController extends Controller
{
  public function showperfil(){

     return view('user-profile');

  }
}
