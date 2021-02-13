<?php
/**
 * Created by PhpStorm.
 * User: PHP
 * Date: 12/8/2019
 * Time: 3:42 PM
 */

namespace General\admin;

use General\db;
class category
{
    public $conn = null;
    public function __construct()
    {
        $this->conn = db::connect();
    }

    public function addCategory($data)
    {
        $name = $_POST['category_name'];

        $query = "INSERT INTO `book-category` (`book-category-name`) VALUES ('$name')";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':category_name',$name);
        $result = $stmt->execute();
        return $result;
    }

    public function showCategory()
    {
        $query = "SELECT * FROM `book-category`";
        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
}