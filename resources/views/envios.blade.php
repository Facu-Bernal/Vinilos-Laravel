@extends('/layout/plantilla')
@extends('header')
@extends('footer')

@section('title', 'Envios')
@section('contenido')
<section>
  <div class="envios container">

    <h3 class="titulo-faq">Envios a todo el país</h3>

    <div class="row">
      <!-- Bara de navegacion -->
      <div class="col-4" style="margin-top:1%;">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link active" id="v-pills-1" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">
          ¿Cómo se realizan los envíos?
          </a>
          <a class="nav-link" id="v-pills-2" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="true">
            ¿Cuánto cuestan los envíos?
          </a>
          <a class="nav-link" id="v-pills-3" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="true">
          ¿Cuánto demoran los envíos?
          </a>
          <a class="nav-link" id="v-pills-4" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="true">
            ¿Si necesito una medida que no está en la página?
          </a>
          <a class="nav-link" id="v-pills-5" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="true">
          ¿Puedo coordinar un día y horario de entrega?
          </a>
          <a class="nav-link" id="v-pills-6" data-toggle="pill" href="#v-pills-6" role="tab" aria-controls="v-pills-6" aria-selected="true">
          ¿Qué pasa si Oca no puede entregar el pedido en la primer visita?
          </a>
          <a class="nav-link" id="v-pills-7" data-toggle="pill" href="#v-pills-7" role="tab" aria-controls="v-pills-7" aria-selected="true">
          ¿Qué opciones tengo si el paquete volvió al domicilio del vendedor?
          </a>
        </div>
      </div>
      <!-- Barra de navegacion -->
      <!-- Main -->
      <div class="col-8">
        <div class="tab-content" id="v-pills-tabContent" style="margin-top: 1%;">

          <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
          Los envíos se realizan a través de Oca. Trabajamos con 2 modalidades de envío: “envío a domicilio” y “envío a sucursal Oca más cercana a tu zona”. Al momento de finalizar la compra, podrás elegir la opción deseada.
          </div>
          <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
          El costo de los envíos varía según el peso total del pedido y la distancia a la que deberá ser enviado. Podés calcular el costo de envío, con exactitud, ingresando tu código postal cada vez que agregues un producto a tu carrito de compras.
          </div>
          <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
          Los envíos demoran entre 4 y 6 días hábiles, una vez que está acreditado el pago.
          </div>
          <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
          Si, podés conocer el estado de tu paquete ingresando a tu cuenta. En la sección “mis compras” podrás clickear en el número de seguimiento para conocer, con exactitud, en qué estado se encuentra tu pedido.
          </div>
          <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-5-tab">
          Si solicitás “envío a domicilio”, Oca pasará por el domicilio que detalles de Lunes a Viernes de 8 a 18 hs. Por el momento, no se puede coordinar un horario. Por eso, te recomendamos asegurarte que siempre habrá alguien en el domicilio en esos horarios para poder recibir tu paquete.
          </div>
          <div class="tab-pane fade" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-6e-tab">
           Oca realizará hasta 3 visitas. Si nadie se encuentra en la dirección para recibirlo, el paquete quedará en “espera de retiro” en la sucursal más cercana al domicilio. Allí se deja durante 7 días para ser retirado, caso contrario volverá al domicilio del vendedor.
          </div>
          <div class="tab-pane fade" id="v-pills-7" role="tabpanel" aria-labelledby="v-pills-7-tab">
          Ante este caso, podrás solicitar la “devolución del dinero”. Tené en cuenta que se devolverá el valor abonado por los productos sin el costo del envío. O bien, podés enviarnos un mail a ventas@lbh.com.ar para que lo enviemos nuevamente. En ese caso, deberás abonar el nuevo costo de envío al recibir el pedido.
          </div>
        </div>
      </div>
    <!-- Main -->
    </div>
  </div>
</section>




@endsection
