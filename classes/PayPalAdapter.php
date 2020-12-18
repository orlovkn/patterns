<?php

class PayPalAdapter implements PaymentInterface
{
    private PayPal $paypal;

    public function __construct()
    {
        $this->paypal = new PayPal();
    }

    public function pay($amount)
    {
        $this->paypal->sendPayment($amount);
    }
}