<?php
session_start();
include_once('../../vendor/autoload.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Profile</title>
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
<?php
include_once("elements/views/header.php");
?>

<div class="super_container" id="main_div">


<div class="container" style="margin-left: 150px">

    <h2 style="margin-left: 400px;margin-top: 10px">Update Form</h2>
    <form class="form-horizontal" action="../../process/user-process/profile/update_process.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label class="control-label col-sm-2" for="firstname">First Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="firstname" placeholder="Enter first name" name="first-name">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="lastname">Last Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="lastname" placeholder="Enter last name" name="last-name">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="password">Password:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="pass">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="password-verify">Retype Password:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="password-verif" placeholder="Enter password again" name="pass-verif">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="contact-no">Contact No:</label>
            <div class="col-sm-10">
                <input type="tel" class="form-control" id="contact-no" placeholder="Enter Number" name="contact-no">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="address">Address:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="address" placeholder="Enter adress" name="address">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="nid">NID No:</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="nid" placeholder="Enter nid no" name="nid-no">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="dob">DoB:</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="dob" placeholder="Enter dob" name="dob">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success">Submit</button>
                <a href="account.php" class="btn btn-danger">Cancel</a>
            </div>

        </div>
    </form>
</div>
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

<?php
include_once ('elements/views/footer.php');

?>
</body>
</html>
