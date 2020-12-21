<?php

class PayByCC
{
    public function pay($amount = 0)
    {
        echo 'Paying ' . $amount . ' using Credit Card';
    }
}