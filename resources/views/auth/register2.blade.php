 {{-- require_once "php/usuarios/validar-register.php" ?> --}}
 @extends('/layout/plantilla')

 @section('title', 'Register')

 @section('contenido')
 <main id="background_registro">
   <div class="container h-100">
     <div class="d-flex justify-content-center h-100">
       <div class="user_card2">
         <div class="d-flex justify-content-center">
           <div class="brand_logo_container2">
             <a href="/index" class=""><img src="img/1.jpg" alt="" id="registro_logo"></a>
           </div>
         </div>
         <div class="d-flex justify-content-center form_container">
           <form>
             <div class="form-row mb-4">
               <div class="col">

                 <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Nombre">
               </div>
               <div class="col">

                 <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Apellido">
               </div>
             </div>


             <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail">


             <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
             <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
               Al menos 8 caracteres y 1 dígito
             </small>


             <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Confirmar Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
             <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">

             </small>


             <div class="custom-control custom-checkbox">
               <input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsletter">
               <label class="custom-control-label" for="defaultRegisterFormNewsletter">Suscribite a nuestro newsletter</label>
             </div>


             <button type="button" name="button" class="btn registro_btn">Registrarse</button>

             <section>
               <p id="registro">o registráte con:</p>

               <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
               <a href="#" class="mx-2" role="button"><i class="fab fa-instagram light-blue-text"></i></a>
               <a href="#" class="mx-2" role="button"><i class="fab fa-pinterest light-blue-text"></i></a>
               <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
             </section>
             <hr class="width=25%">

             <p>Al hacer clic
               <em>Registrarse</em> acepta nuestros
               <a href="" target="_blank">términos de servicio</a></p>

           </form>
         </div>
       </div>
     </div>
   </div>
   <ul class="bubble-boxes">
     <li></li>
     <li></li>
     <li></li>
     <li></li>
     <li></li>
     <li></li>
     <li></li>
     <li></li>
     <li></li>
     <li></li>
   </ul>
 </main>
 @endsection