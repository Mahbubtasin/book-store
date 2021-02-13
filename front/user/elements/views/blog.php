<?php
use General\user\index;
$products = new index();
$products = $products->BlogShow();
$appRoot = '../../';
?>

<div class="blog">
    <div class="container">
        <div class="blog-p">
            <p><h3>New arrival book</h3></p>

        </div>
        <br>
        <div class="row">
            <div class="col">
                <div class="blog_posts d-flex flex-row align-items-start justify-content-between">
                    <!-- Blog post -->
                    <?php foreach ($products as $product){?>
                    <div class="blog_post">
                        <div class="blog_image""><img src="<?= $appRoot.$product['book-cover-photo'] ?>" style="height: 150px; width: 250px;margin-left: -31px; "></div>
                        <div class="blog_text"><?=$product['book-description'] ?></div>
                        <div class="blog_button"><a href="new-product.php?id=<?= $product['book-id']?>">Continue Reading</a></div>
                    </div>
                    <?php } ?>
                </div>
            </div>

        </div>
    </div>
</div>
