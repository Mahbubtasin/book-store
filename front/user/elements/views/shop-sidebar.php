<?php
use General\user\shop;
$data = new shop();
$categories = $data->sideBar();

?>
<div class="shop_sidebar">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link accordion-btn" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Categories</button>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul class="sidebar_categories"><hr>
                                            <?php foreach ($categories as $category){ ?>
                                            <li><a onclick="catProduct(<?= $category['book-category-id']?>)"><?php echo  $category['book-category-name']?></a></li><hr>
                                            <?php }?>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed accordion-btn " type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
    production
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul class="production_list">
                                            <hr>
                                            <li class="brand"><a href="#">production</a></li><hr>
                                            <li class="brand"><a href="#">production</a></li><hr>
                                            <li class="brand"><a href="#">production</a></li><hr>
                                            <li class="brand"><a href="#">production</a></li><hr>
                                            <li class="brand"><a href="#">production</a></li><hr>
                                            <li class="brand"><a href="#">production</a></li><hr>
                                            <li class="brand"><a href="#">production</a></li><hr>
                                            <li class="brand"><a href="#">production</a></li>
                                        </ul>            </div>
                                </div>
                            </div>

                        </div>



                    </div>
