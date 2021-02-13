<?php
include_once ('../../config.php');
$sessionUserName = $_SESSION['username'];
/*$_SESSION['total-cast'];*/
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
$cartSelectQuery="SELECT * FROM `cart` where `username`= '$sessionUserName'";
$cartProductStmt = $conn->prepare($cartSelectQuery);
$cartQueryResult =$cartProductStmt->execute();
$cartDisplay = $cartProductStmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Cart</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/cart_styles.css">
<link rel="stylesheet" type="text/css" href="styles/cart_responsive.css">

</head>

<body>
<a href="elements/cart/cart-process.php"></a>
<div class="super_container">
	
	<!-- Header -->
	
	<?php include_once ('elements/views/header.php')?>

	<!-- Cart -->

	<div class="cart_section">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="cart_container">
                        <div id="cart_container">
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
                                        <?php } ?>
                                    </ul>

                                </div>

                                <!-- Order Total -->
                                <div class="order_total">
                                    <div class="order_total_content text-md-right">
                                        <div class="order_total_title">Order Total:</div>
                                        <div class="order_total_amount">$<?php echo $orderTotal ; $_SESSION['total-cost']= $orderTotal;?></div>
                                    </div>
                                </div>
                                <div class="cart_buttons">
                                    <button onclick="location.href = 'new-shop.php';" id="myButton" class="button cart_button_clear" >Go to shop</button>
                                    <button onclick="location.href = 'checkout.php';" id="myButton" class="button cart_button_checkout" >Check out</button>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

    <?php include_once ('elements/views/login.php')?>



	<!-- Footer -->

    <?php include_once ('elements/views/footer.php')?>

	<!-- Copyright -->

    <?php include_once ('elements/views/copyright.php')?>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/cart_custom.js"></script>
<script>
    //Getting value from "ajax.php".
    function fill(Value) {
        //Assigning value to "search" div in "search.php" file.
        $('#search').val(Value);
        //Hiding "display" div in "search.php" file.
        $('#display').hide();
    }
    $(document).ready(function() {
        //On pressing a key on "Search box" in "search.php" file. This function will be called.
        $("#search").keyup(function() {
            //Assigning search box value to javascript variable named as "name".
            var name = $('#search').val();
            //Validating, if "name" is empty.
            if (name == "") {
                //Assigning empty value to "display" div in "search.php" file.
                $("#display").html("");
            }
            //If name is not empty.
            else {
                //AJAX is called.
                $.ajax({
                    //AJAX type is "Post".
                    type: "POST",
                    //Data will be sent to "ajax.php".
                    url: "ajax.php",
                    //Data, that will be sent to "ajax.php".
                    data: {
                        //Assigning value of "name" into "search" variable.
                        search: name
                    },
                    //If result found, this funtion will be called.
                    success: function(html) {
                        //Assigning result to "display" div in "search.php" file.
                        $("#display").html(html).show();
                    }
                });
            }
        });
    });
</script>
<script>
    $(document).click(function (event) {
        $('#display:visible').hide();
    });
</script>
<script
        src="js/jquery-3.3.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous">

</script>

<script>
    $(document).ready(function () {
        $('#cart').on('click',function () {
            $('#cart-list').toggle();
        })
    })
</script>
<script>
    $(document).ready(function () {
        $('#cart-close').on('click',function () {
            $('#cart-list').toggle();
        })
    })
</script>
<script>
    function delete_data(id) {

        var id= id;
        console.log(id);
        $.ajax({
            type: "POST",
            url: "test.php",
            data: {
                id: id
            },
            success: function (value) {
                $("#table_data").html(value);
                /*$("#cart_count").html($slNo),*/
                $("#cart_icon").load('new-shop.php #cart_icon');
                $("#refresh_cart").load('new-shop.php #refresh_cart');
                $("#cart_list").load('cart.php #cart_list');

            }
        });
    }
</script>
<script>
    function deleteProduct(id) {

        var id= id;
        console.log(id);
        $.ajax({
            type: "POST",
            url: "cartItem-delete.php",
            data: {
                id: id
            },
            success: function (value) {
                $("#cart_container").html(value);
                /*$("#cart_count").html($slNo),*/
                $("#cart_icon").load('new-shop.php #cart_icon')
                $("#refresh_cart").load('new-shop.php #refresh_cart')

            }
        });
    }
</script>
</body>

</html>
<pre>


