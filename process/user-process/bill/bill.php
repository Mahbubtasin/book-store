<?php
include_once ('../../../vendor/autoload.php');
session_start();
use General\user\bill;

try {
    $conn = new PDO("mysql:host=localhost;dbname=bookdb", "root", "");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

$userName= $_SESSION['username'];
$totalBill= $_SESSION['total-cost'];
echo $totalBill;
//
// check bill bill id
//
if ($_SESSION['set-bill-id']==null){
    //
    // user information.
    //
    $bill= new bill();
    $userInfo=$bill->userInfo($userName);

    $firstName=$userInfo['first-name'];
    $lastName=$userInfo['last-name'];
    $userName = $userInfo['username'];
    $email= $userInfo['email'];
    $address= $userInfo['address'];

    //
    // form information collection checkout
    //
    $address2=$_POST['address2'];
    $country= $_POST['country'];
    $state= $_POST['state'];
    $zip = $_POST['zip'];
    $card= $_POST['card'];
    $cardNumber=$_POST['card-number'];
    $expiration= $_POST['expiration'];
    $cvv = $_POST['cvv'];

    $query = "INSERT INTO `billing` (`first_name`, `last_name`, `username`, `email`, `address`, `address-2`, `country`, `state`, `zip`, `name_of_card`, `cradit_card_number`, `expiration`, `cvv`,`total_bill`)
     VALUES ('$firstName', '$lastName', '$userName', '$email', '$address', '$address2', '$country', '$state', '$zip', '$card','$cardNumber', '$expiration', '$cvv','$totalBill')";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':first-name', $firstName);
    $stmt->bindParam(':last-name', $lastName);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':address', $address);
    $stmt->bindParam(':address2', $address2);
    $stmt->bindParam(':country', $country);
    $stmt->bindParam(':state', $state);
    $stmt->bindParam(':zip', $zip);
    $stmt->bindParam(':name_of_card', $card);
    $stmt->bindParam(':cradit_card_number', $cardNumber);
    $stmt->bindParam(':expiration', $expiration);
    $stmt->bindParam(':cvv', $cvv);
    $stmt->bindParam(':total_bill', $totalBill);
    $res = $stmt->execute();

    $_SESSION['set-bill-id']=1;
    //
    // find bill id by user
    //
    $bill= new bill();
    $findBillID = $bill->findBillId($userName);
    $billID=$findBillID['bill-id'];
    //
    // pick product from cart
    //
    $bill = new bill();
    $cartProduct = $bill->cartProduct($userName);
    foreach ($cartProduct as $product){
        $bookID= $product['book-id'];
        $bookName=$product['book-name'];
        $bookCatName = $product['book-category'];
        $bookCatID = $product['book-category-id'];
        $quantity = $product['book-quantity'];
        $quantity= $product['book-quantity'];
        $price= $product['total-price'];
        $contact= null;
        $query = "INSERT INTO `order-product` (`bill_id`, `username`, `contact_no`, `address2`, `email`, `product_id`, `product_name`, `category_id`, `category_name`,`quantity`,`total-price`)
 VALUES ('$billID', '$userName', '$contact', '$address2', '$email', '$bookID', '$bookName', '$bookCatID', '$bookCatName','$quantity','$price')";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':bill_id', $billID);
        $stmt->bindParam(':username', $userName);
        $stmt->bindParam(':contact_no', $contact);
        $stmt->bindParam(':address2', $address2);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':product_id', $bookID);
        $stmt->bindParam(':product_name', $bookName);
        $stmt->bindParam(':category_id', $bookCatID);
        $stmt->bindParam(':category_name', $bookCatName);
        $stmt->bindParam(':quantity', $quantity);
        $stmt->bindParam(':total-price', $price);
        $res = $stmt->execute();
    }
    header("location:../../../front/user/payment.php");


}
else{
    //
}
?>
