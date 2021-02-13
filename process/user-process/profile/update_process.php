<?php
include_once ('../../../vendor/autoload.php');
session_start();

use General\user\profile;
$update = new profile();
$updateProfile = $update->updateprofile();

header('location:../../../front/user/account.php');