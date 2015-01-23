<?php
define('ROOT_DIR',dirname(__FILE__));
$root_directory = $_SERVER['DOCUMENT_ROOT'];
include($root_directory."/config.php");
include($root_directory."/include/include01.php");
include($root_directory."/include/stripe/include02.php");

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

<h1>
<?php echo($root_direectory);?>
</h1>
</br>
</br>
<h1>
<?php testFunctionB();?>
</h1>
</br>
</br>
<h1>
<?php testFunctionA();?>
</h1>


</body>
</html>