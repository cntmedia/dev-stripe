<?php

define('ROOT_DIR',dirname(__FILE__));
$root_directory = $_SERVER['DOCUMENT_ROOT'];
include($root_directory."/config.php");

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Stripe Checkout</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
</head>
<body>

<form action="charge.php" method="post">
  <script src="https://checkout.stripe.com/checkout.js" 
        class="stripe-button"
        data-key="<?php echo $stripe['publishable_key']; ?>"
        data-amount="5000" 
        data-description="One widget">
    </script>
</form>
</body>
</html>