<?php

class ShoppingCart
{
    public $amount = 0;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }

    public function payAmount()
    {
        if ($this->amount >= 500) {
            $payment =  new PayByCC();
        } else {
            $payment = new PayByPayPal();
        }

        $payment->pay($this->amount);
    }
}