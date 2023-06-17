<?php
require_once '../core/Database.php';

class Product {
    private int $productId;
    private string $category;
    private string $productName;
    private int $quantity;
    private float $price;

    public function __construct() {

    }

    public function setProductId(int $productId):void {
        $this->productId = $productId;
    }

    public function getProductId():int {
        return $this->productId;
    }

    public function setCategory(string $category) {
        $this->category = $category;
    }

    public function getCategory():string {
        return $this->category;
    }

    public function setProductName(string $productName) {
        $this->productName = $productName;
    }

    public function getProductName():string {
        return $this->productName;
    }

    public function setQuantity(int $quantity):void {
        $this->quantity = $quantity;
    }

    public function getQuantity():int {
        return $this->quantity;
    }

    public function setPrice(float $price):void {
        $this->price = $price;
    }

    public function getPrice():float {
        return $this->price;
    }

    public function save($data, $userId, $files):void {
        $sql = "INSERT INTO product(user_id, category, product_name, quantity, price, 
        product_img_url_1, product_img_url_2, product_img_url_3, product_img_url_4, product_img_url_5, 
        product_img_url_6) VALUES(:userId, :category, :productName, :quantity, :price, :image1, :image2, 
        :image3, :image4, :image5, :image6)";

        $productInfo = [];
        $productImage = [];

        foreach($files as $file) {
            $path = $this->updateProductImage($file);

            if ($path) {
                array_push($productImage, $path);
            } else {
                throw new Exception('Error in uploading the product images');
            }
        }

        array_push($productInfo, $userId);
        array_push($productInfo, $data['category']);
        array_push($productInfo, $data['product-name']);
        array_push($productInfo, $data['quantity']);
        array_push($productInfo, $data['price']);

        for ($i = 0; $i < 6; $i++) {
            array_push($productInfo, $productImage[$i]);
        }

        $db = new Database();

        $db->write($sql, $productInfo);

    }

    private function updateProductImage(array $file):bool|string {
        $size = 20000;
        $allowedFileTypes = ['jpg', 'jpeg', 'png'];
        
        $fileExtension = pathinfo($file['name'], PATHINFO_EXTENSION);
        $path = dirname(dirname(__DIR__)).'/public/uploads/productImage/';

        if ($file['error'] === 0) {
            if ($size <= $file['size']) {
                if (in_array($fileExtension, $allowedFileTypes)) {
                    $baseName = pathinfo($file['name'], PATHINFO_FILENAME);
                    $newName = $baseName . '_' . uniqid("", true) . $fileExtension;

                    $status = move_uploaded_file($file['tmp_name'], $path.$newName);

                    if ($status) {
                        return $path.$newName;
                    }
                }
            }
        }
        return false;
    }

}