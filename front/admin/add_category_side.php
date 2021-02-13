
<?php
session_start();
try {
    $conn = new PDO("mysql:host=localhost;dbname=bookdb", "root", "");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    /*echo "Connected successfully";*/
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
$category_name = $_REQUEST['category_name'];

$query ="INSERT INTO `book-category` (`book-category-name`) VALUES ('$category_name');";
$stmt = $conn->prepare($query);
$stmt->bindParam(':book-category-name' , $category_name);
$result = $stmt->execute();
/*$msg = $_REQUEST['msg'];
$key= $_SESSION['user-key'];*/
?>