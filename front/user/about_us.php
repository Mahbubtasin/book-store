<?php
$appRoot = '../../';
include_once ('../../config.php');
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Contact</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="OneTech shop project">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
        <link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="styles/registration_style.css">
        <link rel="stylesheet" type="text/css" href="styles/registration_responsive.css">
        <link rel="stylesheet" type="text/css" href="styles/about_us.css">

    </head>

    <body>

    <div class="super_container">

        <!-- Header -->

<?php include_once ('elements/views/header.php')?>


<!--        About us-->

        <section class="bg-light page-section" id="team">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                        <h3 class="section-subheading text-muted">Working on BITM E-commerce Project</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="../../resource/profile_pic_imtiaz.jpg" alt="">
                            <h4>Imtiaz-Ur-Rahman Khan</h4>
                            <p class="text-muted">Professional Web Developer</p>
                            <ul class="list-inline social-buttons">
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://www.facebook.com/imtiaz.dipta">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="../../resource/profile_pic_mahbub.jpg" alt="">
                            <h4>Mahbub-E-Jalil (TASIN)</h4>
                            <p class="text-muted">CSE Engineer</p>
                            <ul class="list-inline social-buttons">
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab icon fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://www.facebook.com/mahubub.tasin">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
        </section>






<!--        Footer-->

        <?php include_once ('elements/views/footer.php')?>>

        <!-- Copyright -->

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
                            <div class="copyright_content"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </div>
                            <div class="logos ml-sm-auto">
                                <ul class="logos_list">
                                    <li><a href="#"><img src="<?= $appRoot; ?>resource/logos_1.png" alt=""></a></li>
                                    <li><a href="#"><img src="<?= $appRoot; ?>resource/logos_2.png" alt=""></a></li>
                                    <li><a href="#"><img src="<?= $appRoot; ?>resource/logos_3.png" alt=""></a></li>
                                    <li><a href="#"><img src="<?= $appRoot; ?>resource/logos_4.png" alt=""></a></li>
                                </ul>
                            </div>
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
    <script src="plugins/easing/easing.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
    <script src="js/contact_custom.js"></script>
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
    </body>


