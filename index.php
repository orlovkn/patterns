<?php

function __autoload($class_name)
{
    include 'classes/' . $class_name . '.php';
}

$obj = new SimpleFluent();

$obj->setA('A')->setB('B')->setC('C');

print_r($obj->getA());
print_r($obj->getB());
print_r($obj->getC());