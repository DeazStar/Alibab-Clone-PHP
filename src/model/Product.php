<?php
require_once dirname(__DIR__) . '/core/Database.php';
session_start();

class Product {
    private int $productId;
    private string $category;
    private string $productName;
    private int $quantity;
    private float $price;
    private array $image_urls;
    
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

    public function setImageUrls(array $image_urls) {
        $this->image_urls = $image_urls;
    }

    public function getImageUrls():array {
        return $this->image_urls;
    }

    public function save($data, $userId, $files):void {
        $sql = "INSERT INTO product(user_id, category, product_name, quantity, price, 
        product_img_url_1, product_img_url_2, product_img_url_3, product_img_url_4, product_img_url_5, 
        product_img_url_6) VALUES(?, ?, ?, ?, ?, ?, ?, 
        ?, ?, ?, ?)";

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
        array_push($productInfo, $data['product_name']);
        array_push($productInfo, $data['quantity']);
        array_push($productInfo, $data['price']);

        for ($i = 0; $i < 6; $i++) {
            array_push($productInfo, $productImage[$i]);
        }


        $db = new Database();

        $status = $db->write($sql, $productInfo);
        var_dump($status);

    }

    public function delete($product_id):void {
        $sql = "SELECT product_img_url_1, product_img_url_2, product_img_url_3, 
                product_img_url_4, product_img_url_5, product_img_url_6 
                FROM product WHERE product_id = :productId";
        
        $params = [':productId' => $product_id];
    
        $db = new Database();
        $rows = $db->read($sql, $params);
    
        if (empty($rows)) {
            throw new Exception('Product not found');
        }
    
        $imageUrls = [];
    
        for ($i = 1; $i <= 6; $i++) {
            $key = 'product_img_url_'.$i;
            if (!empty($rows[0][$key])) {
                array_push($imageUrls, $rows[0][$key]);
            }
        }
    
        $sql = "DELETE FROM product WHERE product_id = :productId";
    
        $db->write($sql, $params);
    
        foreach ($imageUrls as $image_url) {
            if (file_exists($image_url)) {
                unlink($image_url);
            }
        }
    }

    public static function getAllProducts():array {
        $sql = "SELECT * FROM product";
        $db = new Database();

        $rows = $db->read($sql);

        $products = [];

        foreach ($rows as $row) {
            $product = new Product();
            $product->setProductId($row['product_id']);
            $product->setCategory($row['category']);
            $product->setProductName($row['product_name']);
            $product->setQuantity($row['quantity']);
            $product->setPrice($row['price']);
            $imageUrls = [];
            for ($i = 1; $i <= 6; $i++) {
                $key = 'product_img_url_'.$i;
                if (!empty($row[$key])) {
                    array_push($imageUrls, $row[$key]);
                }
            }
            $product->setImageUrls($imageUrls);

            array_push($products, $product);
        }

        return $products;
    }


    public static function addToCart(int $product_id , int $quantity):void{
        $db = new Database();
        $sql = "select quantity from product where product_id = :product_id;";
        $params = [":product_id" => $product_id];
        $row = $db->read($sql ,$params);


        
        $sql = "Insert into cart (user_id , product_id , quantity)
        values ( :user_id , :product_id , :quantity);";
        
        $params = [ ":user_id" => $_SESSION['id'], 
                    ":product_id" => $product_id,
                    ":quantity" => $quantity               
                ];

        $db->write($sql ,$params);
        $newQuantity = $row[0]['quantity'] - $quantity;
        
        $sql = "UPDATE product set quantity = :quantity
                    where product_id = :product_id;";
        $params = [ ':product_id' => $product_id ,
                    ':quantity' => $newQuantity    
                    ];
        $db->write($sql , $params);

    }

    public static function orderProduct(array $order){
        $db = new Database();
        $sql = "Insert into `order`(user_id , product_id , address1, address2 ,province , city , zip_code, phoneNumber)
            values (:user_id , :product_id , :address1 , :address2 , :province , :city ,:zip_code , :phoneNumber) ;";
        $params = [ ':user_id' => $_SESSION['id'] ,
                    ':product_id' => $order['product_id'],
                    ':address1' => $order['address1'],
                    ':address2' => $order['address2'],
                    ':province' => $order['province'],
                    'city' => $order['city'],
                    'zip_code' => $order['zip_code'],
                    'phoneNumber' => $order['phone_number']
        
        ];
        
        $db->write($sql , $params);
        header('Location:cart.php');
    }

    private function updateProductImage(array $file):bool|string {
        $size = 5242880;
        $allowedFileTypes = ['jpg', 'jpeg', 'png'];
        
        $fileExtension = pathinfo($file['name'], PATHINFO_EXTENSION);
        $path = dirname(dirname(__DIR__)).'/public/uploads/product-image/';

        if ($file['error'] === 0) {
            if ($size >= $file['size']) {
                if (in_array($fileExtension, $allowedFileTypes)) {
                    $arrName = explode('.', $file['name']);
                    $baseName = $arrName[0];
                    $newName = $baseName . '_' . uniqid("", true) . '.' . $fileExtension;

                    $status = move_uploaded_file($file['tmp_name'], $path.$newName);

                    if ($status) {
                        return $path.$newName;
                    }
                }
            }
        }
        return false;
    }

    public static function getProductById(int $productId):Product {
        $sql = "SELECT * FROM product WHERE product_id = ?";
        $id = array($productId);
        $db = new Database();
        $data = $db->read($sql, $id);

        $product = new Product();
        $product->setProductId($data[0]['product_id']);
        $product->setCategory($data[0]['category']);
        $product->setProductName($data[0]['product_name']);
        $product->setQuantity($data[0]['quantity']);
        $product->setPrice($data[0]['price']);

        $imageUrls = [];
        for ($i = 1; $i <= 6; $i++) {
            $key = 'product_img_url_'.$i;
            if (!empty($data[0][$key])) {
                array_push($imageUrls, $data[0][$key]);
            }
        }
        $product->setImageUrls($imageUrls);

        return $product;
    }

}