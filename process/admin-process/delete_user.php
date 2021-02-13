<?php



include_once('../../vendor/autoload.php');

use General\admin\all_user;
$delete = new all_user();
$id = $_GET['id'];
$del = $delete->delete_user($id);

if ($del) {
    header('location:../../front/admin/all-user.php');
}
else
{
    echo "Fail to delete user";
}
