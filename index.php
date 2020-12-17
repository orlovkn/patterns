<?php
function __autoload($class_name)
{
    include 'classes/' . $class_name . '.php';
}

$productId = $_GET['productId'];

$qtyCheck = new ProductQty();

if ($qtyCheck->checkQty($productId) > 0) {
    // add product to cart
    $addToCart = new AddToCart($productId);

    // calculate shipping charge
    $shipping = new ShippingCharge();
    $shipping->updateCharge();

    // calculate discount
    $discount = new Discount();
    $discount->applyDiscount();

    // save order
    $order = new Order();
    $order->generateOrder();
}