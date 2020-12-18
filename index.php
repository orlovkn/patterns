<?php

function __autoload($class_name)
{
    include 'classes/' . $class_name . '.php';
}

/*$paypal = new PayPal();
$paypal->sendPayment(500);*/


$paypal = new PayPalAdapter();
$paypal->pay(400);

$visa = new VisaAdapter();
$visa->pay(342);