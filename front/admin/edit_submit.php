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
$category_name = $_REQUEST['category_name_t'];
$category_id = $_REQUEST['category_id_t'];
$query ="UPDATE `book-category` SET `book-category-name` = '$category_name' WHERE `book-category`.`book-category-id` = '$category_id';";
$stmt = $conn->prepare($query);
$stmt->bindParam(':book-category-name' , $category_name);
$result = $stmt->execute();
