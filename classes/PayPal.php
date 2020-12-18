<?php

class PayPal
{
    public function sendPayment($amount)
    {
        echo 'Paying via PayPal: ' . $amount . PHP_EOL;
    }

}