<?php include_once('../../config.php');?>
<?php
/*$cost = new commonClass();
$costTotal = $cost->totalCost('imtiaz');
echo $costTotal;
$_SESSION['totalCost'] = $costTotal;
$v = $_SESSION['totalCost'];
echo $v;
echo "<pre>";

echo '</pre>';*/
use General\user\commonClass;
use General\db;

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
if(isset($_POST['id'])){
    $id = $_POST['id'];
//    echo $id;
    $DeleteQuery= "DELETE FROM `cart` WHERE `cart`.`cart-id` = '$id'";
    $cartProductStmt = $conn->prepare($DeleteQuery);
    $cartQueryResult =$cartProductStmt->execute();

    if (isset($_SESSION['username'])){
        $userName=$_SESSION['username'];
        $totalCost = new commonClass();
        $total= $totalCost->totalCost($userName);

        $_SESSION['total-cost'] = $total;
    }

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
if(empty($allBook)){
  echo '<img src="../../resource/no_data_found.png" style="height: 10px; width: 10px;">';
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
