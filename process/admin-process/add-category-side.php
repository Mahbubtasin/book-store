<?php

include_once ('../../vendor/autoload.php');
session_start();
use General\admin\category;
/*$name = $_POST['category_name'];*/
var_dump($_POST);

/*echo $data;*/
$category = new category();

$categories = $category->addCategory($_POST);

header('location:../../front/admin/add-category.php');

?>