<!---->
<html>
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/blog_styles.css">
<link rel="stylesheet" type="text/css" href="styles/blog_responsive.css">
<!--<script type="text/javascript" src="scripts.js"></script>-->
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>

<?php

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

$id = $_POST['id'];
if(isset($_GET['id'])){
    $id = $_GET['id'];
    echo $id;
    $DeleteQuery= "DELETE FROM `cart` WHERE `cart`.`cart-id` = '$id'";
    $cartProductStmt = $conn->prepare($DeleteQuery);
    $cartQueryResult =$cartProductStmt->execute();
}
?>
<html>
<script>
    console.log('ami eikhane');
</script>

</html>

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
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>

</html>