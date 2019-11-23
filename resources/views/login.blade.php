 {{-- require_once "php/usuarios/validar-login.php"  --}}
@extends('plantilla')
@extends('header')
@extends('footer')

@section('login')
    <div class="container register-form">
      <main>
        <form action="login.php" method="post"  autocomplete="off">
          <!-- Email -->
          <div class="form-group">
            <label for="email1">Email</label>
            <input type="email" name="email" class="form-control" id="email1" aria-describedby="emailHelp" placeholder="Introduzca su email">
            <?php if(isset($error['email'])): ?>
             <p class="errors"><?php echo $error['email'] ?></p>
           <?php endif; ?>
          </div>
          <!-- Email -->
          <!-- Contraseña -->
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="pass" class="form-control" id="password" placeholder="Introduzca su contraseña">
            <?php if(isset($error['pass'])): ?>
             <p class="errors"><?php echo $error['pass'] ?></p>
           <?php endif; ?>
          </div>
          <!-- Contraseña -->
          <label><input id="rememberme" name="rememberme" value="remember" type="checkbox" /> &nbsp;Remember me</label>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </main>
    </div>
@endsection
