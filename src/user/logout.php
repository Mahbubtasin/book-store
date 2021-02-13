<?php


namespace General\user;

use General\db;

class logout
{
    public $conn = null;
    public function __construct()
    {
        $this->conn = db::connect();
    }

    public function clearCart($userName){
        $DeleteQuery= "DELETE FROM `cart` WHERE `cart`.`username`= '$userName'";
        $cartProductStmt = $this->conn->prepare($DeleteQuery);
        $cartQueryResult =$cartProductStmt->execute();
    }


}