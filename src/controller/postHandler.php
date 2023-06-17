<?php
// Include the postProduct.php file
require_once 'postProduct.php';
require_once 'db_connect.php'; 

// Retrieve form data
$category = $_POST['category'];
$product_name = $_POST['product-name'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];

// Upload and store images
$imageReferences = uploadImages($_FILES['image']);

// Insert product and image references into the database
$result = insertProduct($pdo, $category, $product_name, $quantity, $price, $imageReferences);

if ($result) {
  echo "Product and images uploaded successfully!";
} else {
  echo "Error occurred while uploading product and images.";
}
