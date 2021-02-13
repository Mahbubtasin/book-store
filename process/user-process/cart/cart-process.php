
<?php
/*include_once ('../../../config.php');*/
session_start();
$sessionUserName = $_SESSION['username'];


$bookQuantity = $_POST['book-quantity'];
/*echo $bookQuantity;*/
$bookID= $_POST['book-id'];
/*echo $bookID;*/

/*********************************database connection******************************/
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
/****************book information*****************/
$bookIdQuery ="SELECT * FROM `all-book` where `book-id`= '$bookID'";
$bookStmt = $conn->prepare($bookIdQuery);
//$stmt->bindParam(':title' , $_title);
$result = $bookStmt->execute();
$book =$bookStmt->fetch();
/*var_dump($book);*/
/***************end*****************/

/*****************************calculate book price****************************/
$price=$book['book-price'] * $bookQuantity;
/*echo $price;*/
/***************end*****************/


/*****************************query variable*****************************/
$bookName= $book['book-name'];
$bookCoverPhoto=$book['book-cover-photo'];
$bookID= $book['book-id'];
$bookCategory= $book['book-category-name'];
$bookCategoryID= $book['book-category-id'];
/*$username= "imtiaz";
$userID= "1212";
$userFirstName=['first-name'];
$userLastName= $book['user-last-name'];*/
$bookPrice= $book['book-price'];
$totalPrice =$price;



/******************************user information***************************/

$userQuery = "SELECT * FROM `user-reg` where `username`= '$sessionUserName'";
$userStmt = $conn->prepare($userQuery);
$result = $userStmt->execute();
$user = $userStmt->fetch();

$username = $user['username'];
$userID = $user['user-reg-id'];
$userFirstName= $user['first-name'];
$userLastName=$user['last-name'];
/***************end*****************/
/*var_dump($user);*/

/************************check for duplicate value********************************/
$duplicateValueQuery= "SELECT `book-id`,`book-quantity`,`total-price` FROM `cart` where `book-id`= '$bookID' and `username` ='$sessionUserName'";
$valueStmt = $conn->prepare($duplicateValueQuery);
$result = $valueStmt->execute();
$duplicateValues = $valueStmt->fetchAll();

/*echo $duplicateValues.length;*/
/*echo strlen($duplicateValues);*/
$length =  count($duplicateValues);
/*echo $duplicateValues['book-quantity'];*/

foreach ($duplicateValues as $duplicateValue) {
    $changeQuantity = $duplicateValue['book-quantity'] + $bookQuantity;
    $changeBookPrice = $duplicateValue['total-price'] + $price;
    /*echo "book total price" . $changeBookPrice . "<br>";
    echo $changeQuantity;
    echo "book price" . $price . "<br>";
    echo "book price" . $duplicateValue['total-price'] . "<br>";
    echo "book price" . $duplicateValue['book-quantity'] . "<br>";*/
}

if ($length == 0){
    $cartQuery="INSERT INTO `cart` (`book-name`, `book-id`, `book-category`, `book-category-id`,`book-cover-photo`,`username`, `user-id`, `user-first-name`, `user-last-name`, `book-price`,`book-quantity`,`total-price`)
 VALUES ('$bookName','$bookID','$bookCategory','$bookCategoryID','$bookCoverPhoto','$username','$userID','$userFirstName','$userLastName','$bookPrice','$bookQuantity','$totalPrice')";

    $stmt = $conn->prepare($cartQuery);
    $stmt->bindParam(':book-name' , $bookName);
    $stmt->bindParam(':book-id' ,$bookID);
    $stmt->bindParam(':book-category' ,$bookCategory);
    $stmt->bindParam(':book-category-id' ,$bookCategoryID);
    $stmt->bindParam(':username' ,$username);
    $stmt->bindParam(':user-id' ,$userID);
    $stmt->bindParam(':user-first-name' ,$userFirstName);
    $stmt->bindParam(':user-last-name' ,$userLastName);
    $stmt->bindParam(':book-price' ,$bookPrice);
    $stmt->bindParam(':book-quantity' ,$bookPrice);
    $stmt->bindParam(':total-price' ,$totalPrice);
    $resultInsert = $stmt->execute();


    header("location:../../../front/user/cart.php");

}
else{
    $bookQuantityUpdateQuery=" UPDATE `cart` SET `book-quantity` = '$changeQuantity', `total-price` = '$changeBookPrice' WHERE `cart`.`book-id` = '$bookID' and `cart`.`username` = '$sessionUserName'";
    $stmt = $conn->prepare($bookQuantityUpdateQuery);
    $result = $stmt->execute();
    header("location:../../../front/user/cart.php");

}








?>
