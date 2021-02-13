
<?php
include_once ('../../config.php');
$appRoot= '../../';
use General\user\bill;
$userName = $_SESSION['username'];
$t = $_SESSION['total-cost'];
$bill=new bill();
$billInfo = $bill->userBillInfo($userName);
$bill =new bill();
$cartProduct = $bill->cartProduct($userName);
$_SESSION['key']=1;


?>
<!DOCTYPE html>
<html>

<head>
    <title>Book-Store</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="book shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/blog_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/blog_responsive.css">
    <link rel="stylesheet" type="text/css" href="styles/themify-icons.css">
    <!--<script type="text/javascript" src="scripts.js"></script>-->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>


</head>

<body>

<div class="super_container" id="main_div">

    <!-- Header -->

    <?php include_once("elements/views/header.php");?>
    <!--thank you-->
    <div class="jumbotron p-8 p-md-5 text-black-50 rounded bg-light ml-10" style="text-align: center">
        <div class="col-md-12 px-0" style="background-color: #483a3a0f">
            <h1 class="display-4 font-italic" style="color: brown;">Thank You!!</h1>
            <p class="lead my-3">your order id is "<?=$billInfo['bill-id'] ?>" . Product will be delivered in 2-4 working days</p>
            <p>Email us for help</p>
            <p class="lead mb-0"><a class="text-black-50 font-weight-bold"></a></p>
        </div>

    </div>
    <hr>

    <div>
        <div style="text-align: center; margin-top: 55px"><p style="font-family: 'Comic Sans MS';font-size: 20px;color: cadetblue;">Your shopping cart information <hr style="width: 313px;margin-left: 519px;background-color: coral;"></h4></p></div>
    </div>
    <div class=" container row mb-2" style="margin-left: 100px;margin-top: 57px;">
        <div class="col-md-6">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" style="background-color: #bdae43; color: white">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">Delivery Information</strong>
                    <label>Name: <?=$billInfo['first_name'] . $billInfo['last_name'] ?></label>
                    <label>Email:<?=$billInfo['email'] ?> </label>
                    <label>Address: <?=$billInfo['address-2'] ?></label>
                    <label>Total payment: <?=$billInfo['total_bill'] ?> /- tk</label>
                    <label>Delivery Date: with in 2 or 3 working days</label>

                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" style="  background-color: #15bc95;color: white">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success">payment Information</strong>
                    <table class="table table-hover">

                        <tbody style="text-align: center">
                        <?php foreach ($cartProduct as $product){?>
                        <tr>
                            <td style="padding: .20rem; border-top: #8fbc8f"><img src="<?= $appRoot.$product['book-cover-photo']?>" style="width: 40px; height: 40px;border-style: double;"></td>
                            <td style="padding: .20rem;border-top: #8fbc8f"><?= $product['book-price']?>/- tk per unit</td>
                            <td style="padding: .20rem;border-top: #8fbc8f"><?= $product['book-quantity']?> piece</td>
                            <td style="padding: .20rem;border-top: #8fbc8f"><?= $product['total-price']?>/- tk total</td>
                        </tr>
                        <?php }?>
                        </tbody>
                    </table>
                    <span class="tfoot">total cost :</span><span><?= $t?> tk</span>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <main role="main" class="container" style="margin-top: 10px;">
        <div class="row">
            <div class="col-md-8 blog-main" style="background-color: aliceblue;">

                <div class="blog-post" style=" margin-top: 30px ">
                    <h2 class="blog-post-title">Future work</h2>
                    <p class="blog-post-meta">December 17, 2019 by <a href="#">Imtiaz</a></p>

                    <p>This blog post shows a few different types of content that’s supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
                    <hr>
                    <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
                    <blockquote>
                        <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </blockquote>
                    <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                    <h2>Heading</h2>
                    <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                    <h3>Sub-heading</h3>
                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    <pre><code>Example code block</code></pre>
                    <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
                    <h3>Sub-heading</h3>
                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <ul>
                        <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
                        <li>Donec id elit non mi porta gravida at eget metus.</li>
                        <li>Nulla vitae elit libero, a pharetra augue.</li>
                    </ul>
                    <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
                    <ol>
                        <li>Vestibulum id ligula porta felis euismod semper.</li>
                        <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
                        <li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>
                    </ol>
                    <p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>
                </div s><!-- /.blog-post -->
            </div><!-- /.blog-main -->

            <aside class="col-md-4 blog-sidebar">
                <div class="p-4 mb-3 bg-light rounded">
                    <h4 class="font-italic">About us</h4>
                    <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                </div>

            </aside><!-- /.blog-sidebar -->

        </div><!-- /.row -->

    </main><!-- /.container -->




    <?php include_once("elements/views/footer.php");?>

    <!-- Copyright -->

    <?php include_once("elements/views/copyright.php");?>



    <!--Login modals-->

    <?php include_once ('elements/views/login.php')?>

    <!-- cart modal -->


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
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/blog_custom.js"></script>
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
            }
        });
    }
</script>
</body>

</html>

