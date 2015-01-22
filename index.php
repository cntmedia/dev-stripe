<?php

header("Access-Control-Allow-Origin: *");
require(dirname(__FILE__).'/stripe/Stripe.php');
Stripe::setApiKey("sk_test_BQokikJOvBiI2HlWgH4olfQ2");
try {
  if (!isset($_GET['stripeToken']))
    throw new Exception("The Stripe Token was not generated correctly");
  Stripe_Charge::create(array("amount" => 1000,
                              "currency" => "usd",
                              "card" => $_GET['stripeToken']));
  $success = 'Your payment was successful.';
}
catch (Exception $e) {
  $error = $e->getMessage();
}

$resp = array();
$resp['success'] = $success;
$resp['error'] = $error;
echo json_encode($resp);
?>