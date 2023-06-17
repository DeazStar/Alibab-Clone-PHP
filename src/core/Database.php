<?php 

class Database {
    public static $connection;

    public function __construct() {
        try {
            $string = "mysql:host=localhost;dbname=alibaba_db";
            self::$connection = new PDO($string, "admin", "admin");
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public static function getInstance() {
        if (self::$connection) {
            return self::$connection;
        } 

        return $instance = new self();
    }

    public function read($query, $data = array()) {
        $stmt = self::$connection->prepare($query);
        $result = $stmt->execute($data);


        if ($result) {
            $data = $stmt->fetchAll(PDO::FETCH_OBJ);
        
            if (is_array($data)) {
                return $data;
            }
        }

        
        return false;
    }

    public function write($query, $data) {
        $stmt = self::$connection->prepare($query);
        $result = $stmt->execute($data);

        if($result) {
            return true;
        }

        return false;
    }


}