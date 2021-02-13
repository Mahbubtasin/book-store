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
        $cartDisplay[] = $cartQueryResult;
    }
}
?>

<?php
if(empty($cartDisplay)){
    echo 'cart is empty';
}
else {
    $orderTotal = 0;
        ?>
        <div>
            <div class="cart_title">Shopping Cart</div>
            <div class="cart_items">

                <ul class="cart_list" id="cart_list">
                    <?php
                    $orderTotal =0;
                    foreach ($cartDisplay as $display)
                    {
                        $orderTotal = $orderTotal + $display['total-price'];
                        ?>
                        <li class="cart_item clearfix">
                            <div class="cart_item_image"><img src="<?php echo $display['book-cover-photo'];?>" alt="" style="height: 135px; width: 150px;"></div>
                            <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                <div class="cart_item_name cart_info_col">
                                    <div class="cart_item_title">Name</div>
                                    <div class="cart_item_text"><?php echo $display['book-name'];?></div>
                                </div>
                                <div class="cart_item_quantity cart_info_col">
                                    <div class="cart_item_title">Quantity</div>
                                    <div class="cart_item_text"><?php echo $display['book-quantity'];?></div>
                                </div>
                                <div class="cart_item_price cart_info_col">
                                    <div class="cart_item_title">Price</div>
                                    <div class="cart_item_text"><?php echo $display['book-price'];?></div>
                                </div>
                                <div class="cart_item_total cart_info_col">
                                    <div class="cart_item_title">Total</div>
                                    <div class="cart_item_text"><?php echo "$".$display['total-price'];?></div>

                                </div>
                                <button type="button" onclick="deleteProduct(<?=$display['cart-id']?>)" class="btn btn-danger" style="height: 40px; margin-top: 45px;">Remove</button>
                            </div>
                        </li>
                        <hr>
                    <?php
                    }
                    ?>
                </ul>

            </div>

            <!-- Order Total -->
            <div class="order_total">
                <div class="order_total_content text-md-right">
                    <div class="order_total_title">Order Total:</div>
                    <div class="order_total_amount">$<?php echo $orderTotal ; $_SESSION['total-cast']= $orderTotal;?></div>
                </div>
            </div>

            <div class="cart_buttons">
                <button onclick="location.href = 'new-shop.php';" id="myButton" class="button cart_button_clear" >Go to shop</button>
                <button onclick="location.href = 'checkout.php';" id="myButton" class="button cart_button_checkout" >Check out</button>

            </div>
        </div>
    <?php
}?>

