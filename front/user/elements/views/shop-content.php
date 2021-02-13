<?php
use General\user\shop;
$shop = new shop();
$allBook = $shop->shopContent();
$totalBookCount = count($allBook);
$x = 0;
$appRoot = '../../';


?>

<div class="col-lg-9">

    <!-- Shop Content -->

    <div class="shop_content">
        <div class="shop_bar clearfix">
            <div class="shop_product_count">Total :<span> <?=$totalBookCount?></span> Books found</div>
            <div class="shop_sorting">
                <span>Sort by:</span>
                <ul>
                    <li>
                        <span class="sorting_text">highest rated<i class="fas fa-chevron-down"></span></i>
                        <ul>
                            <li class="shop_sorting_button" data-isotope-option='{ "sortBy": "original-order" }'>highest rated</li>
                            <li class="shop_sorting_button" data-isotope-option='{ "sortBy": "name" }'>name</li>
                            <li class="shop_sorting_button"data-isotope-option='{ "sortBy": "price" }'>price</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>


            <!-- Product Item -->
            <div class="row cart-shop" id="cart-shop">
                <?php foreach ($allBook as $book){
                    ?>
                    <div class="col-md-3 block" style="">
                        <div class="cart-all" style="height: 280px; border-radius: 3px;    box-shadow: 5px 4px 10px 0px rgb(86, 82, 82); margin-top: 14px;">
                            <img src="<?= $appRoot.$book['book-cover-photo'] ?>" class="card-img-top" alt="..." style="height: 170px; position: center; margin-left: 10px; margin-right: 10px;margin-top: 10px; width: 170px; ">
                            <div class="cart-in"  >
                                <span><h5 class="card-title" style="text-align: center;margin-top: 10px"><?= $book['book-title']; $x = $x+1;?></h5></span>
                                <span><p class="card-text" style="text-align: center;"><small class="text-muted" style="margin-top: 10px"><?= $book['book-author'] ?></small></p></span>
                                <div class="book_relative_icon" style="margin-top: 10px;">
                                    <span class="" style="margin-left: 30px; border: 1px solid;border-radius: 100%;padding:5px;>
                                        <a href="#" onclick="add_data(<?= $book['book-id']?>)" title="add to cart"><img src="<?= $appRoot?>resource/shopping-cart.svg"></a>
                                    </span>
                                    <span class="read-div" style="margin-left: 20px;    border: 1px solid;border-radius: 100%;padding:5px;">
                                        <a href="read-book.php?id=<?= $book['book-id'] ?>" title="read book"><img src="<?= $appRoot?>resource/book.svg"></a>
                                    </span>
                                    <span class="info-div" style="margin-left: 20px;    border: 1px solid;border-radius: 100%;padding:5px;">
                                        <a href="new-product.php?id=<?=$book['book-id'] ?>" title="book info" ><img src="<?= $appRoot?>resource/info-alt.svg"></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                </div>
                <?php }?>
            </div>
            <!-- Product Item -->

        <!-- Shop Page Navigation -->

        <div class="shop_page_nav d-flex flex-row">
            <div class="page_prev d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-left"></i></div>
            <ul class="page_nav d-flex flex-row">
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">...</a></li>
                <li><a href="#">21</a></li>
            </ul>
            <div class="page_next d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-right"></i></div>
        </div>

    </div>

</div>
