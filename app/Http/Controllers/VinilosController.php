<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\vinilos;

class VinilosController extends Controller
{
   public function lista(){
       $vinilos = vinilos::all();

      $vac= compact('vinilos');

      return view('/home', $vac);
      
   }

}
