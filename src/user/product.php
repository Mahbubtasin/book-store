<?php


namespace General\user;
use General\db;
use PDO;

class product
{
    public $conn = null;

    public function __construct()
    {
        $this->conn = db::connect();
    }

    public function description($bookID){
        $bookSelectQuery = "SELECT * FROM `all-book` WHERE `book-id` = $bookID";
        $bookStmt = $this->conn->prepare($bookSelectQuery);
        $result = $bookStmt->execute();
        while($result = $bookStmt->fetch(PDO::FETCH_ASSOC)){
            $book=$result;
        }
        return $book;
    }


}