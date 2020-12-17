<?php
function __autoload($class_name)
{
    include 'classes/' . $class_name . '.php';
}

$productId = $_GET['productId'];

$order = new ProductOrderFacade($productId);
$order->generateOrder();