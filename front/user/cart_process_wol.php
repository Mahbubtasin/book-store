
<?php
include_once ('../../config.php');
$sessionUserName = $_SESSION['username'];



$bookQuantity = 1;
/*echo $bookQuantity;*/
$bookID= $_POST['id'];
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


    /*header("location:../../../front/user/cart.php");*/

}
else{
    $bookQuantityUpdateQuery=" UPDATE `cart` SET `book-quantity` = '$changeQuantity', `total-price` = '$changeBookPrice' WHERE `cart`.`book-id` = '$bookID' and `cart`.`username` = '$sessionUserName'";
    $stmt = $conn->prepare($bookQuantityUpdateQuery);
    $result = $stmt->execute();
    /*header("location:../../../front/user/cart.php");*/

}
?>
<?php
$userName = $_SESSION['username'];
if(isset($_POST['id'])){
$id = $_POST['id'];
//    echo $id;
$getQuery="SELECT * FROM `cart` WHERE `username`= '$userName'";
$cartProductStmt = $conn->prepare($getQuery);
$cartQueryResult =$cartProductStmt->execute();

$view='';
while ($cartQueryResult = $cartProductStmt->fetch(PDO::FETCH_ASSOC) ){
$allBook[] = $cartQueryResult;
}


}
?>

<?php
use General\user\commonClass;
if (isset($_SESSION['username'])){
    $userName=$_SESSION['username'];
    $totalCost = new commonClass();
    $total= $totalCost->totalCost($userName);

    $_SESSION['total_cost'] = $total;
}
$slNo=0;
if(empty($allBook)){
    echo '';
}
else{
    foreach ($allBook as $item){
        $slNo= $slNo+1 ;?>
        <tr>
            <th scope="row"><?php echo $slNo?></th>
            <td><img src="../../<?php echo $item['book-cover-photo']?>" style="width: 40px;height: 40px;"></td>
            <td><?php echo $item['book-name']?></td>
            <td><?php echo $item['book-quantity']?></td>
            <td><?php echo $item['total-price']?></td>
            <?php $id = $item['cart-id']?>
            <td><a href="#" onclick="delete_data(<?=$id?>)"><i class="fas fa-trash-alt"></i></a></td>

        </tr>
    <?php } ?>
    <tr>
        <td> </td>
        <td colspan="4">Total Price</td>
        <td colspan=""><?php echo $total;?></td>
    </tr>
<?php }?>
