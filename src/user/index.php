<?php


namespace General\user;
use General\db;

class index
{
        public $conn = null;

        public function __construct()
        {
            $this->conn = db::connect();
        }

        public function BlogShow(){
            $query = "SELECT * FROM `all-book`";
            // prepare statement
            $stmt = $this->conn->prepare($query);
            //$stmt->bindParam(':title' , $_title);
            $result = $stmt->execute();
            $products = $stmt->fetchAll();
            return $products;

        }
        public function magazineShow(){
            $query = "SELECT * FROM `all-book` WHERE `book-category-name`='Magazine'";
            $stmt = $this->conn->prepare($query);
            //$stmt->bindParam(':title' , $_title);
            $result = $stmt->execute();
            $magazine = $stmt->fetchAll();
            return $magazine;
        }

}