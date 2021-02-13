<?php
include_once ('../../vendor/autoload.php');
use General\admin\product;
$product = new product();
$products = $product->DisplayProduct();

?>