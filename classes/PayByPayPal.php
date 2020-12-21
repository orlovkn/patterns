<?php

class PayByPayPal implements PayStrategyInterface
{
    public function pay($amount)
    {
        echo 'Paying ' . $amount . ' using PayPal';
    }
}