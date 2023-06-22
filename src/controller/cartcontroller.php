<?php
require_once '../model/Product.php';

$product_id = $_GET['product_id'];
$quantity = $_GET['quantity'];
Product::addToCart($product_id , $quantity);
?>