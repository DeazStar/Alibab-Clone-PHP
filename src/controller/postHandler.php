<?php

require_once '../model/Product.php';

// Retrieve form data
$data = [];

$data["category"] = $_POST['category'];
$data["product_name"] = $_POST['product-name'];
$data["quantity"]= $_POST['quantity'];
$data["price"] = $_POST['price'];

$files = $_FILES;


$product = new Product();

try {
    $product->save($data , 1 , $files );
} catch (Exception $e) {
    echo $e->getMessage();
}