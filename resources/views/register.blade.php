 {{-- require_once "php/usuarios/validar-register.php" ?> --}}
@extends('plantilla')
@extends('header')
@extends('footer')

@section('register')
    <div class="container register-form">
      <main>
        <form action="register.php" method="post"  autocomplete="off">
          <!-- Nombre completo -->
          <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Introduzca su nombre">
            <?php if(isset($error['name'])): ?>
             <p class="errors"><?php echo $error['name'] ?></p>
           <?php endif; ?>
          </div>
          <div class="form-group">
            <label for="lastname">Apellido</label>
            <input type="text" name="lastname" class="form-control" id="lastname" aria-describedby="emailHelp" placeholder="Introduzca su apellido">
            <?php if(isset($error['lastname'])): ?>
             <p class="errors"><?php echo $error['lastname'] ?></p>
           <?php endif; ?>
          </div>
          <!-- Nombre completo -->
          <!-- Email -->
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Introduzca su email">
            <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie más.</small>
            <?php if(isset($error['email'])): ?>
             <p class="errors"><?php echo $error['email'] ?></p>
           <?php endif; ?>
          </div>
          <!-- Email -->
          <!-- Contraseña -->
          <div class="form-group">
            <label for="password1">Password</label>
            <input type="password" name="pass" class="form-control" id="password1" placeholder="Introduzca su contraseña">
            <?php if(isset($error['pass'])): ?>
             <p class="errors"><?php echo $error['pass'] ?></p>
           <?php endif; ?>
          </div>
          <!-- Contraseña -->
          <!-- Verificar Contraseña -->
          <div class="form-group">
            <label for="password2">Confirmar Password</label>
            <input type="password" name="passv" class="form-control" id="password2" placeholder="Vuelva a introducir su contraseña">
            <?php if(isset($error['passv'])): ?>
             <p class="errors"><?php echo $error['passv'] ?></p>
           <?php endif; ?>
          </div>
          <!-- Verificar Contraseña -->
          <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
      </main>
    </div>
@endsection()
