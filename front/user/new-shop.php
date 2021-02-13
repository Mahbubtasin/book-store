<!DOCTYPE html>
<html lang="en">
<?php
include_once ('../../config.php');
$appRoot = '../../';
use General\user\ClearOrderAndBill;
if (isset($_SESSION['username'])){
    if ($_SESSION['key']!= null){
        $userName = $_SESSION['username'];
        $orderClear= new ClearOrderAndBill();
        $orderClear->ClearOrderProduct($userName);

        $billClear = new ClearOrderAndBill();
        $billClear->ClearBill($userName);
    }


}

?>
<head>
    <title>Shop</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="styles/shop_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/shop_responsive.css">
    <link rel="stylesheet" type="text/css" href="styles/themify-icons.css">

</head>

<body>

<div class="super_container">

    <!-- Header -->

    <?php include_once ('elements/views/header.php')?>

    <!-- Home -->

    <!-- Shop -->

    <div class="shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">

                    <!-- Shop Sidebar -->
                    <?php include_once ('elements/views/shop-sidebar.php')?>

                </div>
                <?php include_once ('elements/views/shop-content.php')?>
            </div>
        </div>
    </div>

    <!-- Recently Viewed -->

    <?php include_once ('elements/views/recently-views.php')?>

    <!--login-->
    <?php include_once ('elements/views/login.php')?>

    <!-- Brands -->

    <?php include_once ('elements/views/brands.php')?>

    <!-- Newsletter -->


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
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/shop_custom.js"></script>
<script>
    //Getting value from "ajax.php".-----search------
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
<script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
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
            $('#cart-list').hide();
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
                // console.log(value);
                $("#cart_icon").load('new-shop.php #cart_icon')
            }
        });
    }
</script>
<script>
    function add_data(id) {

        var id= id;
        console.log(id);
        $.ajax({
            type: "POST",
            url: "cart_process_wol.php",
            data: {
                id: id
            },
            success: function (value) {
                $("#table_data").html(value);
                // console.log(value);
                $("#cart_icon").load('new-shop.php #cart_icon')
            }
        });
    }
</script>
<script>
    function catProduct(id) {

        var id= id;
        console.log(id);
        $.ajax({
            type: "POST",
            url: "cat-product.php",
            data: {
                id: id
            },
            success: function (value) {
                $("#cart-shop").html(value);
                // console.log(value);
            }
        });
    }
</script>
</body>

</html>