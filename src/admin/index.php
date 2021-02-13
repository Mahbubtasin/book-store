<?php


namespace General\admin;
use General\db;


class index
{
    public $conn = null;
    public function __construct()
    {
        $this->conn = db::connect();
    }
    public function productForOrder(){
        $query="SELECT * FROM `order-product`";
        $stmt = $this->conn->prepare($query);
        //$stmt->bindParam(':title' , $_title);
        $result = $stmt->execute();
        $productForOrder = $stmt->fetchAll();
        return $productForOrder;
    }
    public function OrderList(){
        $query="SELECT * FROM `billing`";
        $stmt = $this->conn->prepare($query);
        //$stmt->bindParam(':title' , $_title);
        $result = $stmt->execute();
        $productForOrder = $stmt->fetchAll();
        return $productForOrder;
    }

}