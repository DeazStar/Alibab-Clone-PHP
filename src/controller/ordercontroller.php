<?php
    require_once "../model/Product.php";
    Product::orderProduct($_POST);
    
    header('Location:../../public/cart.php');
    exit;
?>