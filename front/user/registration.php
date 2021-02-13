<?php
include_once ('../../config.php');

/*$_SESSION['username']=1;*/
/*$sessionUserName = $_SESSION['username'];*/
/*$totalPrice= $_SESSION['total-cast'];*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Book-Store</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/registration_style.css">
    <link rel="stylesheet" type="text/css" href="styles/registration_responsive.css">


</head>

<body>

<div class="super_container">

    <!-- Header -->

    <?php include_once("elements/views/header.php");?>

    <!-- magazine-->
    <div class="magazine">
        <div class="container">
            <div class="magazine-p">
                <p><h3>Registration Form</h3></p>

            </div>
            <br>
            <div class="row">
                <div class="col">
                    <div class="blog_posts d-flex flex-row align-items-start justify-content-between">
<!--                        <h4>Basic Information</h4>-->

                        <div class="blog_post">
                            <div class="register">
                                <form action="../../process/user-process/connection/insert.php" name="vform" onsubmit="return ValidateReg()" class="register1" method="post" id="register" enctype="multipart/form-data">
                                    <h4>Basic Information</h4>

                                    <div class="form-group">
                                    <label for="first-name">First Name:</label><br>
                                    <input type="text" id="first_name" name="firstName" placeholder="Enter Your First Name">
                                        <p id="firstName_error" style="color: darkred;position: absolute;font-size: 12px;"></p>
                                    </div>

                                    <div class="form-group">
                                    <label for="last-name">Last Name:</label><br>
                                    <input type="text" id="last_name" name="lastName" placeholder="Enter Your Last Name">
                                        <p id="lastName_error" style="color: darkred;position: absolute;font-size: 12px;"></p>
                                    </div>

                                    <div class="form-group">
                                        <label for="pic">Picture:</label><br>
                                        <input type="file" id="image" name="image" placeholder="">
                                    </div>

                                    <div class="form-group">
                                    <label for="user-name">User Name:</label><br>
                                    <input type="text" id="user_name" name="userName" placeholder="Enter Your User Name">
                                        <p id="userName_error" style="color: darkred;position: absolute;font-size: 12px;"></p>
                                    </div>

                                    <div class="form-group">
                                    <label for="email">Email:</label><br>
                                    <input type="email" id="email" name="email" placeholder="Enter Your Email">
                                        <p id="email_error" style="color: darkred;position: absolute;font-size: 12px;"></p>
                                    </div>

                                    <div class="form-group">
                                    <label for="password">Password:</label><br>
                                    <input type="password" id="password" name="pass" placeholder="Enter Your Password">
                                        <p id="password_error" style="color: darkred;position: absolute;font-size: 12px;"></p>
                                    </div>

                                    <div class="form-group">
                                    <label for="re-password">Password Verification:</label><br>
                                    <input type="password" id="re-password" name="pass_verify" placeholder="Enter Your Password Again">
                                        <p id="verify_error" style="color: darkred;position: absolute;font-size: 12px;"></p>
                                    </div>

                                    <div class="form-group">
                                    <label for="contact-no">Number:</label><br>
                                    <input type="tel" id="contact-no" name="contact_no" placeholder="Enter Your Mobile Number">
                                        <p id="contact_error" style="color: darkred;position: absolute;font-size: 12px;"></p>
                                    </div>


                                        </div>
                                     </div>
                                <div class="blog_post_1">
                                    <div class="register1" id="register">

                                    <h4>Personal Information</h4>


                                    <div class="form-group">
                                    <label for="address">Address:</label><br>
                                    <input type="text" id="address" name="address" placeholder="">
                                        <p id="address_error" style="color: darkred;position: absolute;font-size: 12px;"></p>
                                    </div>



                                    <div class="form-group">
                                    <label for="nid-no">NID No.:</label><br>
                                    <input type="number" id="nid-no" name="nid_no" placeholder="">
                                        <p id="nid_error" style="color: darkred;position: absolute;font-size: 12px;"></p>
                                    </div>

                                    <div class="form-group">
                                    <label for="dob">Birthday:</label><br>
                                    <input type="date" id="dob" name="dob" placeholder="">
                                    </div>
                                    <!--                                    <button type="submit" value="submit">Submit</button>-->
                                    <!--    <input type="submit" value="submit" id="sub">-->
                                    <!--    <img src="img/blur-blurred-book-pages-46274.jpg">-->

<!--                                            <button class="btn-group-sm" type="submit">Submit</button>-->
                                    <button type="submit" class="btn btn-primary" id="reg-button">Submit</button>

                                </form>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--Characteristics-->


    <!-- Footer -->

    <?php include_once("elements/views/footer.php");?>

    <!-- Copyright -->

    <?php include_once("elements/views/copyright.php");?>



    <!--Login modals-->



    <!-- Modal -->
    <!-- Modal -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="login">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">If you have an account Please Sign in here  </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Sign in</button>
                                </div>
                            </div>
                        </form>
                        <h5>if you have no account register hare</h5>
                        <button type="button" class="btn btn-primary mr-auto">Register</button>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
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
<script>
    $(document).ready(function(){
        $("#message_login").fadeOut(5000);
    });
</script>
<script>
    /*****************login*****************/
    function validate(){
        let username = document.getElementById("username");
        let password = document.getElementById("password");
        if (username.value.trim() == '' || password.value.trim()==''){
            document.getElementById("demo1").innerHTML="username empty field";
            document.getElementById("demo2").innerHTML="password empty field";
            return false;
        }
        else {
            return true;
        }
    }
</script>
<script>
    function ValidateReg() {

        // SELECTING ALL TEXT ELEMENTS
        var first_name = document.getElementById("first_name");
        var last_name = document.getElementById("last_name");
        var user_name = document.getElementById("user_name");
        var password = document.getElementById("password");
        var re_password = document.getElementById("re-password");
        var email = document.getElementById("email");
        var contact_no = document.getElementById("contact-no");
        var address = document.getElementById("address");
        var nid_no = document.getElementById("nid-no");


        // SELECTING ALL ERROR DISPLAY ELEMENTS
       /* var firstName_error = document.getElementById('firstName_error');
        var lastName_error = document.getElementById('name_error');
        var userName_error = document.getElementById('username_error');
        var email_error = document.getElementById('email_error');
        var password_error = document.getElementById('password_error');
        var passwordVerify_erroe = document.getElementById('verify_error');
        var contactNo_error = document.getElementById('contact_error');
        var address_error = document.getElementById('address_error');
        var nidNo_error = document.getElementById('nid_error');

        // SETTING ALL EVENT LISTENERS
        firstName.addEventListener('blur', FirstNameVerify, true);
        lastName.addEventListener('blur', LastNameVerify, true);
        userName.addEventListener('blur', userNameVerify, true);
        email.addEventListener('blur', emailVerify, true);
        pass.addEventListener('blur', passwordVerify, true);
        pass_verify.addEventListener('blur', passwordConfirmdVerify, true);
        contact_no.addEventListener('blur', contact_noVerify, true);
        address.addEventListener('blur', addressVerify, true);
        nid_no.addEventListener('blur', nid_noVerify, true);*/

        if (first_name.value.trim() == '' ){
            document.getElementById("firstName_error").innerHTML="first name empty field";
            first_name.style.border = "1px solid red";
            return false;
        }

        if (last_name.value.trim() == '' ){
            console.log('ami asiii reg te');
            document.getElementById("lastName_error").innerHTML="last name empty field";
            last_name.style.border = "1px solid red";
            return false;
        }

         if (user_name.value.trim() == '' ){
            document.getElementById("userName_error").innerHTML="user name empty field";
             user_name.style.border = "1px solid red";
            return false;
        }
         if (user_name.value.length<8){
             document.getElementById("userName_error").innerHTML="username length minimum 8 charectar";
             user_name.style.border = "1px solid red";
             return false;
         }

        if (password.value.trim() == '' ){
            document.getElementById("password_error").innerHTML="password empty field";
            password.style.border = "1px solid red";
            return false;
        }
        if (user_name.value.length<8){
            document.getElementById("userName_error").innerHTML="password length minimum 8 charectar";
            user_name.style.border = "1px solid red";
            return false;
        }

        if (re_password.value.trim() == '' ){
            document.getElementById("verify_error").innerHTML=" password verify empty field";
            re_password.style.border = "1px solid red";
            return false;
        }
        if (password.value != re_password.value) {
            re_password.style.border = "1px solid red";
            document.getElementById("verify_error").innerHTML=" password not match";
            re_password.style.border = "1px solid red";
            return false;
        }

         if (email.value.trim() == '' ){
            document.getElementById("email_error").innerHTML="Email empty field";
             email.style.border = "1px solid red";
            return false;
        }

         if (contact_no.value.trim() == '' ){
            document.getElementById("contact_error").innerHTML="Contact no empty field";
             contact_no.style.border = "1px solid red";
            return false;
        }

         if (address.value.trim() == '' ){
            document.getElementById("address_error").innerHTML="address empty field";
             address.style.border = "1px solid red";
            return false;
        }

         if (nid_no.value.trim() == '' ){
            document.getElementById("nid_error").innerHTML="Nid no empty field";
             nid_no.style.border = "1px solid red";
            return false;
        }
        else{
            return true;
        }

    }

</script>
</body>

</html>

