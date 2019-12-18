<?php
//SDK de Mercado Pago
define('PATH',dirname('__FILE__'));
require PATH.'/vendor/autoload.php';

//Agregar credenciales
  MercadoPago\SDK::setClientId("5362594784235825");
  MercadoPago\SDK::setClientSecret("q0tmmoaW5ud8EWTCC9leEe0bOAFNKHuK");

  // MercadoPago\SDK::setAccessToken("TEST_ACCESS_TOKEN");

  $preference = new Mercadopago\Preference();
  // $payment = new MercadoPago\Payment();

  $item= new MercadoPago\Item();
  $item->title = 'Mi producto';
  $item->quantity = 1;
  $item->unit_price = 102.55;
  $preference->items = array($item);
  $preference->save();

  // $payment->transaction_amount = 141;
  // $payment->token = "YOUR_CARD_TOKEN";
  // $payment->description = "Ergonomic Silk Shirt";
  // $payment->installments = 1;
  // $payment->payment_method_id = "visa";
  // $payment->payer = array(
  //   "email" => "larue.nienow@hotmail.com"
  // );

  // $payment->save();

  // echo $payment->status;

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>Aca deberia ir mercadopago</p>
    <form action="/procesar-pago" method="POST">
  <script
   src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"
   data-preference-id="<?php echo $preference->id; ?>">
  </script>
</form>
  </body>
</html>
