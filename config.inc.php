<?

require_once('./lib/Stripe.php');

$stripe = array(
  "secret_key"      => "sk_test_BQokikJOvBiI2HlWgH4olfQ2",
  "publishable_key" => "pk_test_6pRNASCoBOKtIshFeQd4XMUh"
);

Stripe::setApiKey($stripe['secret_key']);
?>

define('STRIPE_PRIVATE_KEY', 'sk_test_udw56z4V1NbZNOdNWDrDNfdK');
define('STRIPE_PUBLIC_KEY', 'pk_test_WJ5z2yZl5ELiyNlhJ1swpxoT');