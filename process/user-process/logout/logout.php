<?php
include_once ('../../../vendor/autoload.php');
session_start();
use General\user\logout;

if(isset($_GET['logout']))
{
    $username = $_SESSION['username'];
    /*$logout = new logout();
    $logout->clearCart($username);*/

    unset($_SESSION['sample']);
    session_destroy();

    header('Location:../../../index.php');

}
