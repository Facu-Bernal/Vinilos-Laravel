@extends('layouts.app')
@extends('header')
@extends('footer')

@section('title', 'Carrito')
@section('contenido')
<h3 id="detalle" class="display-4"></h3>
<div class="px-4 px-lg-0">
    <div class="pb-5">
        <div class="container">
            <section id="carrito_detalle" class="row">
                <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

                    <!-- Shopping cart table -->
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" class="border-0 bg-light">
                                        <div class="p-2 px-3 text-uppercase">Producto</div>
                                    </th>
                                    <th scope="col" class="border-0 bg-light">
                                        <div class="py-2 text-uppercase">Precio</div>
                                    </th>
                                    <th scope="col" class="border-0 bg-light">
                                        <div class="py-2 text-uppercase">Cantidad</div>
                                    </th>
                                    <th scope="col" class="border-0 bg-light">
                                        <div class="py-2 text-uppercase">Remover</div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" class="border-0">
                                        <div class="p-2">

                                        </div>
                                    </th>
                                    <td class="border-0 align-middle"><strong>$</strong></td>
                                    <td class="border-0 align-middle"><strong>-</strong></td>
                                    <td class="border-0 align-middle"><a href="#" class="text-dark"
                                            class="text-center"><i class="fas fa-trash"></i></a></td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="p-2">

                                        </div>
                                    </th>
                                    <td class="align-middle"><strong>$</strong></td>
                                    <td class="align-middle"><strong>-</strong></td>
                                    <td class="align-middle"><a href="#" class="text-dark"><i
                                                class="fas fa-trash"></i></i></a></td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="p-2">

                                        </div>
                                    <td class="align-middle"><strong>$</strong></td>
                                    <td class="align-middle"><strong>-</strong></td>
                                    <td class="align-middle"><a href="#" class="text-dark"><i
                                                class="fas fa-trash"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- End -->
                </div>
            </section>

            <section id="carrito_total" class="row py-5 p-4 bg-white rounded shadow-sm">
                <div class="col-lg-6">
                    <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Resumen del pedido
                    </div>
                    <div id="total" class="p-4">
                        <p class="font-italic mb-4">Shipping and additional costs are calculated based on values you
                            have entered.
                            Los costos de envío y adicionales se calculan en función de los valores que haya ingresado.
                        </p>
                        <ul class="list-unstyled mb-4">
                            <li class="d-flex justify-content-between py-3 border-bottom"><strong
                                    class="text-muted">Subtotal </strong><strong>$</strong></li>
                            <li class="d-flex justify-content-between py-3 border-bottom"><strong
                                    class="text-muted">Shipping and handling</strong><strong>$</strong></li>
                            <li class="d-flex justify-content-between py-3 border-bottom"><strong
                                    class="text-muted">Total</strong>
                                <h5 class="font-weight-bold">$</h5>
                            </li>
                        </ul><a href="#" id="boton_total" class="btn btn-info rounded-pill py-2 btn-block">Checkout</a>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>
@endsection