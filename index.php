<?php

//require(dirname(__FILE__).'/stripe/Stripe.php');


if(file_exists("app/stripe/Stripe.php") && is_readable("app/stripe/Stripe.php") && include("app/stripe/Stripe.php")){
	echo("strip library was included");
}

?>