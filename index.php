<?php

function __autoload($class_name)
{
    include 'classes/' . $class_name . '.php';
}

$amount = 600;

/*if ($amount >= 500) {
    $pay = new PayByCC();
    $pay->pay($amount);
} else {
    $pay = new PayByPayPal();
    $pay->pay($amount);
}*/

$cart = new ShoppingCart($amount);
$cart->payAmount();