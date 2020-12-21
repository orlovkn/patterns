<?php

function __autoload($class_name)
{
    include 'classes/' . $class_name . '.php';
}

$priceSimulator = new PriceSimulator();

$currency1 = new Dollar(10);
$currency2 = new Rouble(20);

$priceSimulator->addCurrency($currency1);
$priceSimulator->addCurrency($currency2);
echo "<br>";

$priceSimulator->updatePrice();
echo "<br>";

$priceSimulator->updatePrice();