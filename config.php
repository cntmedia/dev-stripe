<?php
//require(dirname(__FILE__).'/stripe/Stripe.php');
//sk_test_BQokikJOvBiI2HlWgH4olfQ2

define('STRIPE_PRIVATE_KEY','sk_test_udw56z4V1NbZNOdNWDrDNfdK');
define('STRIPE_PUBLIC_KEY','pk_test_WJ5z2yZl5ELiyNlhJ1swpxoT');

define('ROOT_DIR',dirname(__FILE__));
$root_directory = $_SERVER['DOCUMENT_ROOT'];
include($root_directory."/stripe/Stripe.php");

$stripe = array(
  "secret_key"      => STRIPE_PRIVATE_KEY,
  "publishable_key" => STRIPE_PUBLIC_KEY
);

Stripe::setApiKey($stripe['secret_key']);

?>