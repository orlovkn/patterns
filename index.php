<?php

function __autoload($class_name)
{
    include 'classes/' . $class_name . '.php';
}

$object = Connection::getInstance();
$object1 = Connection::getInstance();
$object2 = Connection::getInstance();