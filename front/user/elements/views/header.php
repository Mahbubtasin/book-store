
<?php
$appRoot = '../../';
use General\user\commonClass;
use General\user\shop;
if (isset($_SESSION['username'])){
    $userName=$_SESSION['username'];
    $totalCost = new commonClass();
    $total= $totalCost->totalCost($userName);

    $_SESSION['total_cost'] = $total;
}


$slNo=0;
$common = new commonClass();
$allBook = $common->cartProductCount();

if(isset($_SESSION['username'])){
    if(empty($allBook)){
        $_SESSION['message']='Cart is empty!!';
    }
}
else{
    $_SESSION['message-forLogin']='To buy any product you must be login first..!!';
}

$a = new commonClass();
$categories = $a->categoryShow();

if (isset($_SESSION['username'])){
    $shop = new commonClass();
    $count = $shop->cartProductCount();
    $totalProduct = count($count);
}
if(isset($_SESSION['username'])){
    $b = $_SESSION['username'];
    $a = new commonClass();
    $photo = $a->user($b );
}

?>


<header class="header">
    <!-------------------------------------------------- Top Bar ------------------------------------------>

    <div class="top_bar">
        <div class="container">
            <div class="row">
                <div class="col d-flex flex-row">
                    <div class="top_bar_contact_item"><div class="top_bar_icon"><img src="<?php echo $appRoot ?>resource/phone.png" alt=""></div>+8801621054002</div>
                    <div class="top_bar_contact_item"><div class="top_bar_icon"><img src="<?php echo $appRoot?>resource/mail.png" alt=""></div><a href="mailto:tasinmahbub79@gmail.com">tasinmahbub79@gmail.com</a></div>
                    <div class="top_bar_content ml-auto" >
                        <div class="left-content">
                            <div class="top_bar_menu">
                                <ul class="standard_dropdown top_bar_dropdown">
                                    <li>
                                        <a href="#">English<i class="fas fa-chevron-down"></i></a>
                                        <ul>
                                            <li><a href="#">Italian</a></li>
                                            <li><a href="#">Spanish</a></li>
                                            <li><a href="#">Japanese</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">$ US dollar<i class="fas fa-chevron-down"></i></a>
                                        <ul>
                                            <li><a href="#">TAKA</a></li>
                                            <li><a href="#">GBP British Pound</a></li>
                                            <li><a href="#">JPY Japanese Yen</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="top_bar_user">
                                <div class="user_icon"><img src="<?php echo $appRoot?>resource/user.png" alt=""></div>
                                <?php if (isset($_SESSION['username'])){?>
                                    <div><a href="<?php echo $appRoot?>process/user-process/logout/logout.php?logout=1">Logout</a></div>
                                <?php }
                                else {?>
                                    <div><a href="registration.php">Register</a></div>
                                    <div><a href="#" data-toggle="modal" data-target="#login">Sign in</a></div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!------------------------------------------ Header Main ---------------------------------------------->

    <div class="header_main">
        <div class="container">
            <div class="row">

                <!-- Logo -->
                <div class="col-lg-2 col-sm-3 col-3 order-1">
                    <div class="logo_container">
                        <div class="logo">
                            <a href="<?= $appRoot; ?>front/user/index.php"><img src="<?php echo $appRoot ?>resource/logo-8.png" style="height: 160px"; width="150px";></a>
                        </div>
                    </div>
                </div>

                <!-------------------------------------------- Search -------------------------------------->
                <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                    <div class="header_search">
                        <div class="header_search_content">
                            <div class="header_search_form_container">
                                <form action="#" class="header_search_form clearfix">
                                    <input type="text" id="search" required="required" class="header_search_input" placeholder="Search for products...">

                                    <div class="custom_dropdown">
                                        <div class="custom_dropdown_list">
                                            <span class="custom_dropdown_placeholder clc">All Categories</span>
                                            <i class="fas fa-chevron-down"></i>
                                            <ul class="custom_list clc">
                                                <?php foreach ($categories as $category){
                                                    ?>
                                                    <li><a class="clc" href="#"><?php echo $category['book-category-name']?></a></li>
                                                    <!--<li><a class="clc" href="#">Magazine</a></li>-->
                                                <?php } ?>

                                            </ul>
                                        </div>
                                    </div>
                                    <button type="submit" class="header_search_button trans_300" value="Submit"><img src="<?php echo $appRoot?>resource/search.png" alt=""></button>
                                </form>
                                <div id="display" style="background-color: rgb(233, 233, 233);; margin-right: 250px;"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!------------------------------------------ user logo ------------------------------------------------------->
                <div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
                    <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
                        <?php if (isset($_SESSION['username'])){?>
                            <div class="wishlist d-flex flex-row align-items-center justify-content-end">
                                <div class="wishlist_icon" style="height: 45px; width: 45px; background-color: #4e555b;border-radius: 10px;"><img src="<?php echo $appRoot.$photo['picture']?>" alt=""style="height: 45px; width: 45px; border-radius: 10px; "></div>
                                <div class="wishlist_content">
                                    <div class="wishlist_count" style="color: red;">Hello!!</div>
                                    <div class="wishlist_text"><a href="user_profile.php"><?php echo $_SESSION['username']?></a></div>

                                </div>
                            </div>
                        <?php }?>

                        <!------------------------------------- Cart --------------------------------------->
                        <div class="cart">
                            <div class="cart_container d-flex flex-row align-items-center justify-content-end">
                                <div class="cart_icon" id="cart_icon">
                                    <img src="<?php echo $appRoot?>./resource/cart.png" alt="">
                                    <?php
                                    if (isset($_SESSION['username'])){
                                        ?>
                                        <div class="cart_count" id="cart_count"><span><?= $totalProduct ?></span></div>
                                    <?php }
                                    else{?>
                                        <div class="cart_count" id="cart_count"><span>0</span></div>
                                    <?php }?>
                                </div>

                                <div class="cart_content">
                                    <div class="cart_text dropdown" >

                                        <span><a href="#" id="cart" >Cart</a></span>
                                        <div id="cart-list" class="dropdown-content" style=" display: none;
                                position: absolute;
                                overflow-x: hidden;
                                background-color: rgb(227,224,234);
                                scroll-behavior: smooth;
                                scrollbar-width: thin;
                                scrollbar-color: #aa5454 #aaaa5a78;

                                width: 420px;
                                height: 400px;
                                margin-top: 20px;
                                margin-left: -351px;
                                border-radius: 5px;">
                                            <div class="container" id="refresh_cart" >
                                                <span style="font-family: 'Comic Sans MS'; margin-top: 21px; font-size: 22px; position: absolute;">Shoping cart</span><button type="button" class="btn btn-light" id="cart-close" style="margin-left: 275px;margin-top: 20px; height:30px:;">close <img src="<?php echo $appRoot?>resource/window-close-regular.svg" style="height: 20px; width: 30px;"></button>
                                                <?php if (isset($_SESSION['username'])){
                                                    ?>
                                                    <table class="table" style="margin-top: 10px; font-size: 8px;" >
                                                        <thead class="thead-dark">
                                                            <tr>
                                                                <th scope="col">SL no</th>
                                                                <th scope="col">Image</th>
                                                                <th scope="col">Book Name</th>
                                                                <th scope="col">Quantity</th>
                                                                <th scope="col">Price</th>
                                                                <th scope="col">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="tbody-light" id="table_data" style="font-size: 10px;position: center">
                                                        <?php foreach ($allBook as $item){
                                                            $slNo= $slNo+1 ;?>
                                                            <tr>
                                                                <th scope="row"><?php echo $slNo?></th>
                                                                <td><img src="../../<?php echo $item['book-cover-photo']?>" style="width: 40px;height: 40px;"></td>
                                                                <td><?php echo $item['book-name']?></td>
                                                                <td><?php echo $item['book-quantity']?></td>
                                                                <td><?php echo $item['total-price']?></td>
                                                                <?php $id = $item['cart-id']?>
                                                                <td><a  onclick="delete_data(<?=$id?>)"><i class="fas fa-trash-alt"></i></a></td>
                                                            </tr>
                                                        <?php } ?>
                                                            <tr>
                                                                <td> </td>
                                                                <td colspan="4">Total Price</td>
                                                                <td colspan=""><?php echo $total;?></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div style="  margin-bottom: 25px;text-align: center;height: 50px;">
                                                        <a href="cart.php" class="btn btn-primary" style="background-color:#009966;width: 319px;border-radius: 10px;">Process to checkout</a>
                                                    </div>
                                                <?php } else {?>
                                                    <div style="margin-top: 100px; text-align: center;">
                                                        <p style="font-size: 24px;font-size: 24px;color: firebrick;font-family: cursive;background-color: #c19b1e36;">
                                                            <?php echo $_SESSION['message-forLogin'];
                                                            unset($_SESSION['message-forLogin'])?>
                                                        </p>
                                                    </div>
                                                <?php }?>

                                            </div>


                                        </div>
                                    </div>
                                    <!--<div class="cart_price">$85</div>-->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---------------------Session message---------------------------->
    <?php if (isset($_SESSION['message-front'])){
        echo '<div id="message_login" style="-webkit-transition: 2s;height: 107px;width: 100%;background-color: #9a6f26eb;z-index: 1;position: fixed;text-align: center;font-size: 80px;olor: #eae7e3;">';

        echo $_SESSION['message-front'];
        unset($_SESSION['message-front']);

        echo '</div>';
    }?>


    <!-- Main Navigation -->

    <nav class="main_nav">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="main_nav_content d-flex flex-row">

                        <!-- Categories Menu ----->

                        <div class="cat_menu_container">
                            <div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
                                <div class="cat_burger"><span></span><span></span><span></span></div>
                                <div class="cat_menu_text">categories</div>
                            </div>

                            <ul class="cat_menu">
                                <?php foreach ($categories as $category){
                                    ?>
                                    <!--<li><a href="#">Book <i class="fas fa-chevron-right ml-auto"></i></a></li>
                                    <li><a href="#">Magazine<i class="fas fa-chevron-right"></i></a></li>-->
                                    <li class="hassubs">
                                        <a href="#"><?php echo $category['book-category-name']?><i class="fas fa-chevron-right"></i></a>
                                        <ul>
                                            <?php


                                            $subCategories = $a->subCatShow($category['book-category-id']);

                                            ?>
                                            <?php
                                            if ($subCategories!=0)
                                                foreach ($subCategories as $subCategory){?>
                                                    <li><a href="#"><?php echo $subCategory['book-subcategory-name']?><i class="fas fa-chevron-right"></i></a></li>
                                                <?php } ?>
                                        </ul>


                                    </li>
                                <?php }?>
                            </ul>
                        </div>

                        <!-- Main Nav Menu -->

                        <div class="main_nav_menu ml-auto">
                            <ul class="standard_dropdown main_nav_dropdown">
                                <li><a href="index.php">Home<i class="fas fa-chevron-down"></i></a></li>
                                <li class="hassubs"><a href="new-shop.php">Books</a></li>
                                <?php if (isset($_SESSION['username'])){ ?>
                                    <li class="hassubs"><a href="news-paper.php">News-paper</a></li>
                                    <li class="hassubs"><a href="magazine.php">Magazine</a></li>
                                <?php }?>
                                <li class="hassubs"><a href="contact.php">Contact-us</a></li>
                                <li><a href="about_us.php">About-us<i class="fas fa-chevron-down"></i></a></li>

                            </ul>
                        </div>

                        <!-- Menu Trigger -->

                        <div class="menu_trigger_container ml-auto">
                            <div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
                                <div class="menu_burger">
                                    <div class="menu_trigger_text">menu</div>
                                    <div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Menu -->

    <div class="page_menu">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page_menu_content">

                        <div class="page_menu_search">
                            <form action="#">
                                <input type="search" required="required" class="page_menu_search_input" placeholder="Search for products...">
                            </form>
                        </div>
                        <ul class="page_menu_nav">
                            <li class="page_menu_item has-children">
                                <a href="#">Language<i class="fa fa-angle-down"></i></a>
                                <ul class="page_menu_selection">
                                    <li><a href="#">English<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">Italian<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">Spanish<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">Japanese<i class="fa fa-angle-down"></i></a></li>
                                </ul>
                            </li>
                            <li class="page_menu_item has-children">
                                <a href="#">Currency<i class="fa fa-angle-down"></i></a>
                                <ul class="page_menu_selection">
                                    <li><a href="#">US Dollar<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">EUR Euro<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">GBP British Pound<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">JPY Japanese Yen<i class="fa fa-angle-down"></i></a></li>
                                </ul>
                            </li>
                            <li class="page_menu_item">
                                <a href="index.html">Home<i class="fa fa-angle-down"></i></a>
                            </li>
                            <li class="page_menu_item has-children">
                                <a href="#">Super Deals<i class="fa fa-angle-down"></i></a>
                                <ul class="page_menu_selection">
                                    <li><a href="#">Super Deals<i class="fa fa-angle-down"></i></a></li>
                                    <li class="page_menu_item has-children">
                                        <a href="#">Menu Item<i class="fa fa-angle-down"></i></a>
                                        <ul class="page_menu_selection">
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                </ul>
                            </li>
                            <li class="page_menu_item has-children">
                                <a href="#">Featured Brands<i class="fa fa-angle-down"></i></a>
                                <ul class="page_menu_selection">
                                    <li><a href="#">Featured Brands<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                </ul>
                            </li>
                            <li class="page_menu_item has-children">
                                <a href="#">Trending Styles<i class="fa fa-angle-down"></i></a>
                                <ul class="page_menu_selection">
                                    <li><a href="#">Trending Styles<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                </ul>
                            </li>
                            <li class="page_menu_item"><a href="#">blog<i class="fa fa-angle-down"></i></a></li>
                            <li class="page_menu_item"><a href="contact.html">contact<i class="fa fa-angle-down"></i></a></li>
                        </ul>

                        <div class="menu_contact">
                            <div class="menu_contact_item"><div class="menu_contact_icon"><img src="<?php echo $appRoot?>resource/phone_white.png" alt=""></div>+38 068 005 3570</div>
                            <div class="menu_contact_item"><div class="menu_contact_icon"><img src="<?php echo $appRoot?>resource/mail_white.png" alt=""></div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
