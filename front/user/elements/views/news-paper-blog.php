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
                    <div class="blog_post">
                        <div class="blog_image""><img src="" style="height: 150px; width: 250px;margin-left: -31px; "></div>
                    <div class="blog_text"></div>
                    <div class="blog_button"><a href="new-product.php?id=">Continue Reading</a></div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
