<?php

class Dollar implements Currency
{
    public $price;

    public function __construct($price)
    {
        $this->price = $price;
        echo "<p>Original Dollar price: {$price}</p>";
    }

    public function update()
    {
        $this->price = $this->getPrice();
        echo "<p>Dollar price updated: {$this->price}</p>";
    }

    public function getPrice()
    {
        return $this->price += 0.2;
    }
}