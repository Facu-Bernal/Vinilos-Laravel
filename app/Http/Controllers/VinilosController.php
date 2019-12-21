<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Vinilo;

use App\Categoria;

class VinilosController extends Controller
{
   public function home(){
      return view('/home');

   }

   public function listarVinilos(){
     $vinilos = vinilo::all();

       $vac= compact('vinilos');

     return view("vinilos",$vac);
   }

   public function cocina(){

      $vinilos = vinilo::where('categoria_id', 'LIKE', '1')
      ->get();

      $vac=compact('vinilos');

      return view('cocina', $vac);
   }

   public function dormitorio(){

      $vinilos = vinilo::where('categoria_id', 'LIKE', '2')
      ->get();

      $vac=compact('vinilos');

      return view('dormitorio', $vac);
   }

   public function living(){

      $vinilos = vinilo::where('categoria_id', 'LIKE', '3')
      ->get();

      $vac=compact('vinilos');

      return view('living', $vac);
   }

   public function infantil(){

      $vinilos = vinilo::where('categoria_id', 'LIKE', '5')
      ->get();

      $vac=compact('vinilos');

      return view('infantil', $vac);
   }

   public function eliminarVinilo(Request $req){

    $vinilo = Vinilo::find($req["id"]);

    $vinilo->delete();

    return redirect("/vinilos");

   }

   public function modificarVinilo(Request $req){

     $categorias = Categoria::all();

     $vinilo = Vinilo::find($req["id"]);

     $vac=compact('vinilo', 'categorias');

      return view('modificarVinilos', $vac);

   }

   public function agregarVinilo(){

     $categorias = Categoria::all();

     $vac=compact('categorias');

     return view('altaVinilos', $vac);
   }

   public function guardarAltaVinilo(Request $req){

       // $vinilo = Vinilo::find($req["id"]);
       $newVinilo = new Vinilo();

      $reglas=[
          'name' => 'required|string|max:100',
          'img' => 'required|file',
          'descripcion' => 'required|string|max:500',
          'categoria' => 'string|max:11|required',
          'precio' => 'required|numeric'
      ];

      $mensajes = [
        'float' => "El campo :attribute debe ser decimal y contener tenes hasta 20 digitos",
        'max' => "El campo :attribute acepta hasta :max",
        'numeric' => "El campo :attribute solo acepta numeros"
      ];


      $this->validate($req, $reglas,$mensajes);


      $ruta= $req->file("img")->store("public");
      $nombreArchivo=basename($ruta);



      $newVinilo->nombre = $req["name"];
      $newVinilo->imagen = $nombreArchivo;
      $newVinilo->descripcion = $req["descripcion"];
      $newVinilo->categoria_id = $req["categoria"];
      $newVinilo->precio = $req["precio"];

      $newVinilo->save();

     return redirect("/vinilos");
   }

   public function guardarModiVinilo(Request $req){

      $vinilo = Vinilo::find($req["id"]);

      $reglas=[
          'name' => 'required|string|max:100',
          'img' => 'nullable|file',
          'descripcion' => 'required|string|max:500',
          'categoria' => 'string|max:11|required',
          'precio' => 'required|numeric'
      ];

      $mensajes = [
        'float' => "El campo :attribute debe ser decimal y contener tenes hasta 20 digitos",
        'max' => "El campo :attribute acepta hasta :max",
        'numeric' => "El campo :attribute solo acepta numeros"
      ];


      $this->validate($req, $reglas,$mensajes);

      if(!empty($req->file("img"))){
        $ruta= $req->file("img")->store("public");
        $nombreArchivo=basename($ruta);
        $vinilo->imagen = $nombreArchivo;
      }


      $vinilo->nombre = $req["name"];
      $vinilo->descripcion = $req["descripcion"];
      $vinilo->categoria_id = $req["categoria"];
      $vinilo->precio = $req["precio"];

      $vinilo->save();

     return redirect("/vinilos");
   }


   public function cart()
   {
       return view('cart');
   }
   public function addToCart($id)
   {
       $vinilos = vinilo::find($id);

       if(!$vinilos) {

           abort(404);

       }

       $cart = session()->get('cart');

       // if cart is empty then this the first product
       if(!$cart) {

           $cart = [
                   $id => [
                       "name" => $vinilos->nombre,
                       "quantity" => 1,
                       "price" => $vinilos->precio,
                       "photo" => $vinilos->imagen
                   ]
           ];

           session()->put('cart', $cart);

           return redirect()->back()->with('success', 'Product added to cart successfully!');
       }

       // if cart not empty then check if this product exist then increment quantity
       if(isset($cart[$id])) {

           $cart[$id]['quantity']++;

           session()->put('cart', $cart);

           return redirect()->back()->with('success', 'Product added to cart successfully!');

       }

       // if item not exist in cart then add to cart with quantity = 1
       $cart[$id] = [
           "name" => $vinilos->nombre,
           "quantity" => 1,
           "price" => $vinilos->precio,
           "photo" => $vinilos->imagen
       ];

       session()->put('cart', $cart);

       return redirect()->back()->with('success', 'Product added to cart successfully!');
   }

   public function update(Request $request)
   {
       if($request->id and $request->quantity)
       {
           $cart = session()->get('cart');

           $cart[$request->id]["quantity"] = $request->quantity;

           session()->put('cart', $cart);

           session()->flash('success', 'Cart updated successfully');
       }
   }

   public function remove(Request $request)
   {
       if($request->id) {

           $cart = session()->get('cart');

           if(isset($cart[$request->id])) {

               unset($cart[$request->id]);

               session()->put('cart', $cart);
           }

           session()->flash('success', 'Product removed successfully');
       }
   }

}
