<?php


namespace General\user;
use General\db;

class bill
{
    public $conn=null;
    public function __construct()
    {
        $this->conn=db::connect();
    }
    public function userInfo($userName){
        $query = "SELECT * FROM `user-reg` WHERE `username`= '$userName'";
        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute();
        $user = $stmt->fetch();
        return $user;
    }

    public function cartProduct($userName){
        $query = "SELECT * FROM `cart` WHERE `username`= '$userName'";
        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute();
        $cartProduct = $stmt->fetchAll();

        return $cartProduct;
    }
    public function findBillId($userName){
        $query ="SELECT * FROM `billing` WHERE `username`= '$userName'";
        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute();
        $billID = $stmt->fetch();
        return $billID;
    }
    public function userBillInfo($userName){
        $query ="SELECT * FROM `billing` WHERE `username`= '$userName'";
        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute();
        $billInfo = $stmt->fetch();
        return $billInfo;
    }

}