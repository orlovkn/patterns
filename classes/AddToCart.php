<?php

class AddToCart
{
    private int $productId;

    public function __construct($productId) {
        $this->productId = $productId;
        var_dump("added productId " . $this->productId );
    }
}