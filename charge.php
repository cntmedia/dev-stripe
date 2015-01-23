<?php
define('ROOT_DIR',dirname(__FILE__));
$root_directory = $_SERVER['DOCUMENT_ROOT'];
include($root_directory."/config.php");


  $token  = $_POST['stripeToken'];
  $email  = $_POST['stripeEmail'];

  $customer = Stripe_Customer::create(array(
      'email' => $email,
      'card'  => $token
  ));

  $charge = Stripe_Charge::create(array(
      'customer' => $customer->id,
      'amount'   => 5000,
      'currency' => 'usd',
      'description' => 'Widget, Qty 1'
  ));

  echo '<h1>Successfully charged $50.00!</h1>';
?>
