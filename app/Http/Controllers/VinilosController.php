<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Vinilo;

class VinilosController extends Controller
{
   public function lista(){
      $vinilos = vinilo::all();

      $vac= compact('vinilos');

      return view('/home', $vac);

   }

   public function cocina(){

      $vinilos = vinilo::where('nombre', 'LIKE', 'Vinilo Cocina')
      ->get();

      $vac=compact('vinilos');

      return view('cocina', $vac);
   }

   public function living(){

      $vinilos = vinilo::where('nombre', 'LIKE', 'Vinilo Living')
      ->get();

      $vac=compact('vinilos');

      return view('living', $vac);
   }

   public function dormitorio(){

      $vinilos = vinilo::where('nombre', 'LIKE', 'Vinilo Dormitorio')
      ->get();

      $vac=compact('vinilos');

      return view('dormitorio', $vac);
   }

   public function infantil(){

      $vinilos = vinilo::where('nombre', 'LIKE', 'Vinilo Infantil')
      ->get();

      $vac=compact('vinilos');

      return view('infantil', $vac);
   }

   public function eliminarVinilo(Request $req){

    $vinilo = Vinilo::find($req["id"]);){

    $vinilo->delete();

    return redirect("perfil");

   }

   public function modificarVinilo(Request $req){

    $vinilo = Vinilo::find($req["id"]);){

      $vac=compact('vinilo');

      return view('altaModVinilos', $vac);

   }

   public function agregaVinilo(){
       return view('altaModVinilos');
   }

   public function guardarVinilo(Request $req){
       return redirect("perfil");
   }

}
