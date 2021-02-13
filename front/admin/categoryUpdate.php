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
$id = $_POST['id'];
$getQuery="SELECT * FROM `book-category` WHERE `book-category-id`= '$id'";
$cartProductStmt = $conn->prepare($getQuery);
$cartQueryResult =$cartProductStmt->execute();
$result = $cartProductStmt->fetch();
?>
<input type="hidden" class="form-control" id="category" name="category_id" value="<?=$result['book-category-id'] ?>">
<input type="text" class="form-control" id="category" name="category_name" value="<?=$result['book-category-name'] ?>">
