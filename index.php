<?php

function __autoload($class_name)
{
    include 'classes/' . $class_name . '.php';
}

$commandAction = 'TurnOnRadio';
$command = new $commandAction(new RadioControl());
$command->execute();