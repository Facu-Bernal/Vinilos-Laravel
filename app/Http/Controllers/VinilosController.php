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

   public function cocina(){
      
      $vinilos = vinilos::where('nombre', 'LIKE', 'Vinilo Cocina')
      ->get();
      
      $vac=compact('vinilos');

      return view('cocina', $vac);
   }

   public function living(){
      
      $vinilos = vinilos::where('nombre', 'LIKE', 'Vinilo Living')
      ->get();
      
      $vac=compact('vinilos');

      return view('living', $vac);
   }

   public function dormitorio(){
      
      $vinilos = vinilos::where('nombre', 'LIKE', 'Vinilo Dormitorio')
      ->get();
      
      $vac=compact('vinilos');

      return view('dormitorio', $vac);
   }

   public function infantil(){
      
      $vinilos = vinilos::where('nombre', 'LIKE', 'Vinilo Infantil')
      ->get();
      
      $vac=compact('vinilos');

      return view('infantil', $vac);
   }

   
}
