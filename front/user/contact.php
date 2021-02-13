<?php
$appRoot = '../../';
include_once ('../../config.php');
$userName = $_SESSION['username'];
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
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">

</head>

<body>

<div class="super_container">
	
	<!-- Header -->
	
	<?php include_once ('elements/views/header.php')?>
    <?php include_once ('elements/views/login.php')?>

	<!-- Contact Info -->

	<div class="contact_info">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="contact_info_container d-flex flex-lg-row flex-column justify-content-between align-items-between">

						<!-- Contact Item -->
						<div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
							<div class="contact_info_image"><img src="<?= $appRoot; ?>resource/contact_1.png" alt=""></div>
							<div class="contact_info_content">
								<div class="contact_info_title">Phone</div>
								<div class="contact_info_text">+38 068 005 3570</div>
							</div>
						</div>

						<!-- Contact Item -->
						<div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
							<div class="contact_info_image"><img src="<?= $appRoot; ?>resource/contact_2.png" alt=""></div>
							<div class="contact_info_content">
								<div class="contact_info_title">Email</div>
								<div class="contact_info_text">fastsales@gmail.com</div>
							</div>
						</div>

						<!-- Contact Item -->
						<div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
							<div class="contact_info_image"><img src="<?= $appRoot; ?>resource/contact_3.png" alt=""></div>
							<div class="contact_info_content">
								<div class="contact_info_title">Address</div>
								<div class="contact_info_text">10 Suffolk at Soho, London, UK</div>
							</div>
						</div>
                        <?php if (isset($_SESSION['username'])){ ?>
                        <div class="contact_info_item d-flex flex-row align-items-center justify-content-start" onclick="messageBox()">
                            <div class="contact_info_image"><img src="<?= $appRoot; ?>resource/contact_3.png" alt=""></div>
                            <div class="contact_info_content">
                                <div class="contact_info_title">Direct Contact</div>
                                <div class="contact_info_text">10 Suffolk at Soho, London, UK</div>
                            </div>
                        </div>
                        <?php } ?>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact Form -->

	<div class="contact_form">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="contact_form_container">
						<div class="contact_form_title">Get in Touch</div>
                            <div id="email">

                                <form action="../../process/user-process/connection/contact_process.php" id="contact_form">
                                        <div class="contact_form_inputs d-flex flex-md-row flex-column justify-content-between align-items-between">
                                            <input type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="Your name" name="fullname" required="required" data-error="Name is required.">
                                            <input type="text" id="contact_form_email" class="contact_form_email input_field" placeholder="Your email" name="email" required="required" data-error="Email is required.">
                                            <input type="text" id="contact_form_phone" class="contact_form_phone input_field" placeholder="Your phone number" name="telephone">
                                        </div>
                                        <div class="contact_form_text">
                                            <textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
                                        </div>
                                        <div class="contact_form_button">
                                            <button type="submit" class="button contact_submit_button" name="submit">Send Message</button>
                                        </div>
                                </form>
                            </div>
                            <!----------------------------message----------------------------------------->
                            <div id="message" style="display: none">
                                <form name="form1">
                                    <div class="contact_form_text" id="chatlogs" style="height: 200px;overflow-x: hidden;border: 3px solid darkgoldenrod">
                                    </div>
                                    <div class="contact_form_inputs d-flex flex-md-row flex-column justify-content-between align-items-between">
                                        <textarea id="msg" class="text_field contact_form_message" name="msg" rows="4" placeholder="Message"  style="height: 100px; width: 300px;"></textarea>
                                        <p id="empty_field"></p>
                                    </div>
                                    <div class="contact_form_button">
                                        <input type="hidden" name="uname" value="<?=$userName ?>" >

                                        <a  class="btn-primary contact_submit_button" onclick="submitChat()">Send</a>
                                    </div>
                                </form>
                            </diV>
					</div>
				</div>
			</div>
		</div>
		<div class="panel"></div>
	</div>

	<!-- Map -->

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1097.0023914896888!2d91.82512674580778!3d22.358857334353605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd89b3aded8b5%3A0x311b3673f0f0499e!2sBITM%20-%20Chittagong%20Campus!5e0!3m2!1sbn!2sbd!4v1574927435259!5m2!1sbn!2sbd" width="100%" height="550" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
						<div class="newsletter_title_container">
							<div class="newsletter_icon"><img src="<?= $appRoot; ?>resource/send.png" alt=""></div>
							<div class="newsletter_title">Sign up for Newsletter</div>
							<div class="newsletter_text"><p>...and receive %20 coupon for first shopping.</p></div>
						</div>
						<div class="newsletter_content clearfix">
							<form action="#" class="newsletter_form">
								<input type="email" class="newsletter_input" required="required" placeholder="Enter your email address">
								<button class="newsletter_button">Subscribe</button>
							</form>
							<div class="newsletter_unsubscribe_link"><a href="#">unsubscribe</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Footer -->

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
<script>function fill(Value) {
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
    function messageBox() {
        console.log('kaj kore');
        $('#email').hide();
        $('#message').show();
    }
</script>
<script>
    function submitChat() {
        console.log('ami asi');
        if( form1.msg.value==''){
            document.getElementById('empty_field').innerHTML ='Field is empty';
        }
        let uname =form1.uname.value;
        let msg = form1.msg.value;
        let xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState==4 && xmlhttp.status==200){
                document.getElementById('chatlogs').innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open('GET', 'insert.php?uname='+uname+'&msg='+msg,true);
        xmlhttp.send();
    }
    $(document).ready(function (e) {
        $.ajaxSetup({cache:false});
        setInterval(function () {
            $('#chatlogs').load('logs.php');
        }, 2000);

    });
</script>
</body>

</html>