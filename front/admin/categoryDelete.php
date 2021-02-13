<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=bookdb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    /*echo "Connected successfully";*/
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}


$slNo=0;
$id = $_POST['id'];
$query = "DELETE FROM `book-category` WHERE `book-category`.`book-category-id` = '$id'";
$cartProductStmt = $conn->prepare($query);
$cartQueryResult =$cartProductStmt->execute();