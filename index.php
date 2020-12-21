<?php

function __autoload($class_name)
{
    include 'classes/' . $class_name . '.php';
}

$email = new Email();
//$email->loadBody();

$email = new ChristmasEmailBody($email);
$email = new NewYearEmailBody($email);
$email->loadBody();