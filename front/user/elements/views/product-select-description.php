<?php

/**
 * Created by PhpStorm.
 * User: PHP
 * Date: 11/14/2019
 * Time: 1:52 PM
 */
use General\user\product;
$bookID=$_GET['id'];
$p= new product();
$books = $p->description($bookID);
$appRoot = '../../'
/*echo $bookID;*/
?>
<!-- Selected Image -->
<div class="col-lg-5 order-lg-2 order-1">
    <div class="image_selected"><img src="<?php echo $appRoot.$books['book-cover-photo']?>" alt=""></div>
</div>

<!-- Description -->
<div class="col-lg-5 order-3" >
    <div class="product_description">
        <div class="product_category"><?php echo $books['book-category-name']?></div>
        <div class="product_name"><?php echo $books['book-name']?></div>
        <div class="product_name"><?php echo $books['book-title']?></div>

        <div class="product_text"><p><?php echo $books['book-description']?></p></div>
        <div class="order_info d-flex flex-row">
            <form action="../../process/user-process/cart/cart-process.php" enctype="multipart/form-data" method="post">
                <input type="hidden" name="book-id" value="<?=$books['book-id']?>">
                <div class="clearfix" style="z-index: 1000;">

                    <!-- Product Quantity -->
                    <div class="product_quantity clearfix">
                        <span>Quantity: </span>
                        <input id="quantity_input" type="text" pattern="[0-9]*" name="book-quantity" value="1">
                        <div class="quantity_buttons">
                            <div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fas fa-chevron-up"></i></div>
                            <div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fas fa-chevron-down"></i></div>
                        </div>
                    </div>

                    <!-- Product Color -->


                </div>

                <div class="product_price">price : <?php echo $books['book-price']?> TK</div>
                <div class="button_container">
                    <button type="submit" class="button cart_button">Add to Cart</button>

                </div>
            </form>
            <button onclick="location.href = '../../process/user-process/readingBook/reading-book-process.php?id=<?= $books['book-id']?>';" id="myButton" class="button cart_button" >Read book</button>
        </div>
    </div>
</div>
