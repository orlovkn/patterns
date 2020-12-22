<?php

class SubObject
{
    static $counter = 0;
    public $number;

    public function __construct()
    {
        $this->number = ++self::$counter;
    }

    public function __clone()
    {

    }
}