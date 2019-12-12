@extends('layouts.app')
@extends('header')
@extends('footer')

@section('title', 'Envios')
@section('contenido')
<section>
    <div class="FAQ container">

        <h3 class="titulo-faq">Metodos de pago</h3>

        <div class="row faqConteiner">
            <!-- Bara de navegacion -->
            <div class="col-4" style="margin-top:1%;">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">
                        ¿Con qué medios de pago cuentan?
                    </a>
                    <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="true">
                        ¿Es posible abonar con tarjeta y en cuotas?
                    </a>
                    <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="true">
                        ¿Cuánto demora la acreditación de mi pago?
                    </a>
                </div>
            </div>
            <!-- Barra de navegacion -->
            <!-- Main -->
            <div class="col-8">
                <div class="tab-content" id="v-pills-tabContent" style="margin-top: 1%;">

                    <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        Trabajamos con la plataforma Mercado Pago, la cual incluye tarjetas de crédito, Rapi-Pago, Pago Fácil, cajeros Red Link, cajeros Red Banelco o “saldo disponible en tu cuenta”.
                    </div>
                    <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
                        Si, podés abonar con tarjeta en cuotas. Contamos con promociones sin interés con determinados bancos.
                        Conocelas haciendo click aquí.
                    </div>
                    <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
                    Si pagás con tarjeta de crédito, los pagos se acreditan al instante. En caso de abonar con alguno de los otros medios, los pagos demoran entre 24 y 48 hs. hábiles en acreditarse.
                    Tené en cuenta que tu pedido será enviado una vez confirmada la acreditación.
                    </div>
                </div>
            </div>
            <!-- Main -->
        </div>
    </div>
</section>
@endsection
