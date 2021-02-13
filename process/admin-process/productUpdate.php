<?php
include_once ('../../vendor/autoload.php');
use General\admin\product;
$product = new product();
$data = $_POST;
/*var_dump($_POST);*/
$result = $product->ThroughProduct($data);
if($result){
    echo "success";
    header("location:../../front/admin/all-product.php");
}else{
    echo "fail";
}

