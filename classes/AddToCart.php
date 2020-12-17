<?php

class AddToCart
{
    private int $productId;

    public function __construct($productId) {
        $this->productId = $productId;
    }
}