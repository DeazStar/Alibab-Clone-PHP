<?php
// Include the postProduct.php file
require_once 'postProduct.php';
require_once 'db_connect.php'; 

// Retrieve form data
$data = [];

$data["category"] = $_POST['category'];
$data["product_name"] = $_POST['product-name'];
$data["quantity "]= $_POST['quantity'];
$data["price"] = $_POST['price'];
$files = $_FILES;

$product->save($data , $_SESSION['id'] , $files );
// Upload and store images
$imageReferences = uploadImages($_FILES['image']);
// // Insert product and image references into the database
// $result = insertProduct($pdo, $category, $product_name, $quantity, $price, $imageReferences);

// if ($result) {
//   echo "Product and images uploaded successfully!";
// } else {
//   echo "Error occurred while uploading product and images.";
// }
