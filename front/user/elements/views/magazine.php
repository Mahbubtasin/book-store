<?php
use \General\user\index;
$appRoot = '../../';
$index = new index();
$magazines = $index->magazineShow();

?>
<div class="magazine">
    <div class="container">
        <div class="magazine-p">
            <p><h3>Best Magazine Collection</h3></p>

        </div>
        <br>
        <div class="row">
            <div class="col">
                <div class="blog_posts d-flex flex-row align-items-start justify-content-between">
                    <!-- magazine post -->
                    <?php foreach ($magazines as $magazine) {?>
                    <div class="blog_post">
                        <div class="blog_image" style=""><img src="<?=$appRoot.$magazine['book-cover-photo'] ?>" style="height: 150px; width: 250px;margin-left: -31px; "></div>
                        <div class="blog_text"><?=$magazine['book-description'] ?></div>
                        <div class="blog_button"><a href="blog_single.html">Continue Reading</a></div>
                    </div>
                    <?php } ?>
                </div>
            </div>

        </div>
    </div>
</div>
