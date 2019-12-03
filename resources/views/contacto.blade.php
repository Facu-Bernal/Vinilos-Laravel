@extends('layouts.app')
@extends('header')
@extends('footer')

@section('title', 'Contacto')

@section('contenido')
<div class="contacto container">
  <div class="titulo-contenedor">
    <h3 class="titulo-faq">Contactate con Nosotros</h3>
  </div>

  <div class="row ">
    <div class="col-lg-6">
      <form action="contacto.php" method="post" autocomplete="off">
        <div class="form-group">
          <label for="name">Nombre</label>
          <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Introduzca su nombre">
          <?php if (isset($error['name'])) : ?>
            <p class="errors"><?php echo $error['name'] ?></p>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="lastname">Apellido</label>
          <input type="text" name="lastname" class="form-control" id="lastname" aria-describedby="emailHelp" placeholder="Introduzca su apellido">
          <?php if (isset($error['lastname'])) : ?>
            <p class="errors"><?php echo $error['lastname'] ?></p>
          <?php endif; ?>
        </div>
        <!-- Nombre completo -->
        <!-- Email -->
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Introduzca su email">
          <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie más.</small>
          <?php if (isset($error['email'])) : ?>
            <p class="errors"><?php echo $error['email'] ?></p>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <textarea name="name" rows="8" cols="80" class="form-control" placeholder="Ingresa tu consulta"></textarea>
        </div>
        <button type="submit" class="btn btn-info" width="25%">Enviar</button>
      </form>
    </div>
    <div id="mapa" class="contenedor-mapa col-lg-6">
      <div>
        <h2>Encontranos en nuestro local de Aristides 711, Ciudad - Mendoza</h2>
      </div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3350.268954728947!2d-68.86304268493265!3d-32.89105657640616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x967e09a990344147%3A0x9b0ccbff726f65da!2sAv.%20Ar%C3%ADstides%20Villanueva%20711%2C%20M5500%20Mendoza!5e0!3m2!1ses-419!2sar!4v1568595967630!5m2!1ses-419!2sar" width="100%" height="430vh" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
  </div>
</div>
@endsection