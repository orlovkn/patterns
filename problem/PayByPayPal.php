<?php

class PayByPayPal
{
    public function pay($amount = 0)
    {
        echo 'Paying ' . $amount . ' using PayPal';
    }
}