@extends('layouts.app')
@extends('header')
@extends('footer')

@section('title', 'FAQ')

@section('contenido')
<section>
  <div class="FAQ container">

    <h3 class="titulo-faq">Preguntas Frecuentes</h3>

    <div class="row">
      <!-- Bara de navegacion -->
      <div class="col-4" style="margin-top:1%;">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">
            ¿Cuáles son las superficies sugeridas para que lo pegue?
          </a>
          <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="true">
            ¿Es fácil de colocar el vinilo? ¿Puedo hacerlo yo mismo?
          </a>
          <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="true">
            ¿Hacen pedidos especiales?
          </a>
          <a class="nav-link" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="true">
            ¿Si necesito una medida que no está en la página?
          </a>
          <a class="nav-link" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="true">
            ¿Cómo se compra y paga?
          </a>
          <a class="nav-link" id="v-pills-6-tab" data-toggle="pill" href="#v-pills-6" role="tab" aria-controls="v-pills-6" aria-selected="true">
            ¿Cuándo me llega, cómo me avisan qué está listo?
          </a>
        </div>
      </div>
      <!-- Barra de navegacion -->
      <!-- Main -->
      <div class="col-8">
        <div class="tab-content" id="v-pills-tabContent" style="margin-top: 1%;">
          {{-- ¿Cuáles son las superficies sugeridas para que lo pegue? --}}
          <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-home-tab">
            Se pueden aplicar en paredes interiores o exteriores no rugosas con buena terminación y limpias, también se puede colocar sobre placas de durlok pintado.
            La superficie debe ser lisa, firme, dura y debe estar seca y libre de polvo y suciedad, no debe tener ni humedad ni grasa al momento de la colocación.
            No debe ser colocado en paredes ubicadas cerca de calefactores.
            Quedan muy bien sobre vidrios, mamparas, espejos, ventanas, vidrieras, heladeras, puertas, muebles, fórmicas, azulejos, autos, embarcaciones, etc.
          </div>
          <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
            Es tan fácil como si estuvieras pegando una gran calcomanía. La idea de nuestra propuesta es que te animes a hacerlo sólo.
            De todos modos podes contratar el servicio de colocación, en ese caso te pasamos los teléfonos de los colocadores para que coordines directamente con ellos.
          </div>
          <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
            Vinilos Mendoza escucha tu propuesta, envianos un mail con tu idea y preparamos un diseño nuevo para presentarte.
          </div>
          <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
            Todos los modelos se pueden llevar en proporción al tamaño adecuado para tu espacio.
            Simplemente completá el formulario de contacto indicando la nueva medida y el modelo para que podamos cotizarlo.
          </div>
          <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-5-tab">
            ONLINE - Solo tenés que elegir el producto que más te guste y completar el formulario de compra para que se cargue en el carrito.
            Podés optar por pago por transferencia o a través de Mercado Pago.
          </div>
          <div class="tab-pane fade" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-6-tab">
            Demoramos 8 días hábiles para contactarte para tu entrega, desde que somos informados de tu pago.
            Nos contactamos con vos para enviarte el código de seguimiento de tu envío para que puedas seguirlo desde la página de OCA.
            Tené en cuenta que si pagas por Rapipago, el sistema de Mercado Pago demora más de 48 hs en activarnos tu compra.
          </div>
        </div>
      </div>
    <!-- Main -->
    </div>
  </div>
</section>
@endsection
