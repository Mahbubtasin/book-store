<?php
include_once ('../../../vendor/autoload.php');
session_start();
use General\user\read;
echo "ashchi";
$id= $_GET['id'];
echo $id;
$userName = $_SESSION['username'];
$read = new read();
$p = $read->checkPoints($userName);
$points=$p['coins'];
echo $points;

if( $points>5){
    $points=$points-5;
    $setPoints=new read();
    $update= $setPoints->updatePoints($userName, $points);
    if ($update == 1){
        header("Location:../../../front/user/read-book.php?id=$id");
    }
    else{
        echo 'no payment';
    }

}

?>
