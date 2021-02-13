<?php


namespace General\user;
use General\db;
use PDO;
class shop
{
    public $conn = null;

    public function __construct()
    {
        $this->conn = db::connect();
    }

    public function sideBar(){
        $categoryQuery = "SELECT * FROM `book-category`";
        $categoryStmt = $this->conn->prepare($categoryQuery);
        $resultCategory = $categoryStmt->execute();
        //$categories =$categoryStmt->fetchAll();
        while ($resultCategory = $categoryStmt->fetch(PDO::FETCH_ASSOC) ){
            $data[]=$resultCategory;
        }
        return $data;
    }
    public function shopContent(){
        $bookQuery = "SELECT * FROM `all-book`";
        $bookStmt = $this->conn->prepare($bookQuery);
        $resultAllBook = $bookStmt->execute();
        /*$allBooks =$bookStmt->fetchAll();*/
        while ($resultAllBook = $bookStmt->fetch(PDO::FETCH_ASSOC) ){
            $data[]=$resultAllBook;
        }
        return $data;
    }


}
