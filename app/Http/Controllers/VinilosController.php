<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Vinilo;

class VinilosController extends Controller
{
   public function lista(){
      return view('/home');

   }

   public function listarVinilos(){
     $vinilos = vinilo::all();

       $vac= compact('vinilos');

     return view("vinilos",$vac);
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

    $vinilo = Vinilo::find($req["id"]);

    $vinilo->delete();

    return redirect("perfil");

   }

   public function modificarVinilo(Request $req){

     $vinilo = Vinilo::find($req["id"]);

      $vac=compact('vinilo');

      return view('altaModVinilos', $vac);

   }

   public function agregarVinilo(){
     return view('altaModVinilos');
   }

   public function guardarViniloModificado(Request $req){

       $vinilo = Vinilo::find($req["id"]);

      $reglas=[
          'name' => 'string|max:100|required',
          'imagen' => 'file|required',
          'descripcion' => 'string|max:500|required',
          'categoria' => 'string|max:11|required',
          'precio' => 'numeric|max:20|required',

      ];

      $mensajes = [
        'float' => "El campo :attribute debe ser decimal y contener tenes hasta 20 digitos",
        'max' => "El campo :attribute acepta hasta :max"
      ];


      $this->validate($req, $reglas,$mensajes);

      $ruta= $req->file("img")->store("public");
      $nombreArchivo=basename($ruta);

      $vinilo->name = $req["name"];
      $vinilo->imagen = $nombreArchivo;
      $vinilo->descripcion = $req["descripcion"];
      $vinilo->categoria = $req["categoria"];
      $vinilo->precio = $req["Domicilio"];

      dd($vinilo);
      $vinilo->save();

     return view("vinilos");
   }



}
