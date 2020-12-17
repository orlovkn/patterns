<?php

class ProductOrderFacade
{
    public string $productId = '';

    public function __construct(string $productId)
    {
        $this->productId = $productId;
    }

    public function generateOrder()
    {
        if ($this->qtyCheck()) {
            // add product to cart
            $this->addToCart($this->productId);
            // calculate shipping charge
            $this->calculateShipping();
            // calculate discount
            $this->applyDiscount();
            // save order
            $this->placeOrder();
        }
    }

    private function qtyCheck()
    {
        // check in database
        return true;
    }

    private function addToCart($productId)
    {
        $addToCart = new AddToCart($productId);
    }

    private function calculateShipping()
    {
        $shipping = new ShippingCharge();
        $shipping->updateCharge();
    }

    private function applyDiscount()
    {
        $discount = new Discount();
        $discount->applyDiscount();
    }

    private function placeOrder()
    {
        $order = new Order();
        $order->generateOrder();
    }
}