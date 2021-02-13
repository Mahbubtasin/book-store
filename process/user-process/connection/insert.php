<?php

include_once ('../../../vendor/autoload.php');
session_start();

use General\user\user_registration;

$reg = new user_registration();

$register = $reg->registration();

if ($register == 1)
{
    header('location:../../../index.php');
}


