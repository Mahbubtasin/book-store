<?php


namespace General\user;


use General\db;

class ClearOrderAndBill
{
    public $conn = null;

    public function __construct()
    {
        $this->conn = db::connect();
    }
    public function ClearOrderProduct($userName){
        $query="DELETE FROM `order-product` WHERE `order-product`.`username` = '$userName'";
        $cartStmt = $this->conn->prepare($query);
        $result = $cartStmt->execute();
    }
    public function ClearBill($userName){
        $query="DELETE FROM `billing` WHERE `billing`.`username` = '$userName';";
        $cartStmt = $this->conn->prepare($query);
        $result = $cartStmt->execute();
    }

}