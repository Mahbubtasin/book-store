<?php

include_once('../../vendor/autoload.php');
$data = $_POST;
var_dump($data);
use General\admin\all_user;
$user = new all_user();
$updateUser = $user->update_user($data);

if ($updateUser) {
    header('location:../../front/admin/all-user.php');
}
else
{
    echo "User Update Fail....";
}