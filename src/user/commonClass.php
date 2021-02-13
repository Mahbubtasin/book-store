<?php


namespace General\user;
use General\db;
use PDO;

class commonClass
{

    public $conn = null;

    public function __construct()
    {
        $this->conn = db::connect();
    }

    public function cartProductCount()
    {
        if (isset($_SESSION['username'])) {
            $sessionUserName = $_SESSION['username'];
            $cartProductQuery = "SELECT * FROM `cart` WHERE `username` = '$sessionUserName' ";
            $cartStmt = $this->conn->prepare($cartProductQuery);
            $result = $cartStmt->execute();
            $allBook = $cartStmt->fetchAll();
            return $allBook;

        }

    }
    public function categoryShow(){
//        echo 'call hoi';
        $categoryQuery = "SELECT * FROM `book-category`";
        $q = $this->conn->prepare($categoryQuery);
        $r = $q->execute();
//        $categories =$categoryStmt->fetchAll();
        while($r = $q->fetch(PDO::FETCH_ASSOC)){
            $data[]=$r;
        }

        return $data;
    }

    public function subCatShow($categoryID){
        $subCategoryQuery = "SELECT * FROM `book-subcategory` WHERE `book-category-id`=$categoryID";

        $q = $this->conn->prepare($subCategoryQuery);
        $r = $q->execute();
        if ($q->rowCount() > 0){
            while($r = $q->fetch(PDO::FETCH_ASSOC)){
                $data[]=$r;
            }
        }else
            $data = 0;


        return $data;
    }
    public function totalCost($userName){
        $totalCost = 0;
        $costQuery="SELECT `total-price` FROM `cart` WHERE `username` = '$userName'";
        $q = $this->conn->prepare($costQuery);
        $r = $q->execute();
        $r = $q->fetchAll();
        foreach ($r as $cost){
            $cost= $cost['total-price'];
            $totalCost = $totalCost+ $cost;
        }
        return $totalCost;
    }
    public function user($id){
        $Query = "SELECT * FROM `user-reg` WHERE `username` = '$id' ";
        $cartStmt = $this->conn->prepare($Query);
        $result = $cartStmt->execute();
        $allUser = $cartStmt->fetch();
        return $allUser;
    }

//while($r = $q->fetch(PDO::FETCH_ASSOC)){
//$data[]=$r;
//}

}