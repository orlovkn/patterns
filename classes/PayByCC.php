<?php

class PayByCC implements PayStrategyInterface
{
    public function pay($amount)
    {
        echo 'Paying ' . $amount . ' using Credit Card';
    }
}