<?php

//sk_test_udw56z4V1NbZNOdNWDrDNfdK
//pk_test_WJ5z2yZl5ELiyNlhJ1swpxoT

//define('ROOT_DIR',dirname(__FILE__));
//$root_directory = $_SERVER['DOCUMENT_ROOT'];

require_once('lib/Stripe.php');
Stripe::setApiKey("sk_test_udw56z4V1NbZNOdNWDrDNfdK");

if(isset($_POST)) {
	$payment = Stripe_Charge::create(array(
		'amount'        => $_POST['amount'],
		'currency'      => $_POST['currency'],
		'card'          => array(
			'number'    => $_POST['card'],
			'exp_month' => $_POST['expMonth'],
			'exp_year'  => $_POST['expYear'],
			'cvc'       => $_POST['cvc']
			),
		'description'   => $_POST['description']
		)
	);
	print_r($payment);
}
	
	
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Stripe Checkout - <?php testFunctionB();?>
</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
</head>
<body>

<form method="POST">
	<input type="hidden" name="amount" value="50">
	<input type="hidden" name="currency" value="gbp">
	<input type="hidden" name="description" value="This is a test payment">
	<label for="card number" style="float: left; width: 200px">Card Number: </label>
	<input type="text" name="card">
	<div style="clear: both"></div>
	<label for="card number" style="float: left; width: 200px">Expiry Month: </label>
	<input type="text" name="expMonth">
	<div style="clear: both"></div>
	<label for="card number" style="float: left; width: 200px">Expiry Year: </label>
	<input type="text" name="expYear">
	<div style="clear: both"></div>

	<label for="card number" style="float: left; width: 200px">CVC (3 numbers on the back): </label>
	<input type="text" name="cvc">
	<div style="clear: both"></div>

	<input type="submit" value="make payment">
</form>


</body>
</html>