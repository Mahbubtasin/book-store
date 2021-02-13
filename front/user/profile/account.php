<?php
session_start();
//$approot = '../../';

$pageRoot= '../../';
/*include_once ($_SERVER["DOCUMENT_ROOT"].'/book-store/vendor/autoload.php');*/
include_once ('../../../vendor/autoload.php');
/*echo $_SERVER['DOCUMENT_ROOT'];*/
use General\user\profile;
$obj = new profile();
$account = $obj->showprofile();



?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../styles/profile.css">
    <title>Profile</title>
</head>
<body>

<div class="container">
    <div class="row profile">
        <div class="col-md-3">
            <div class="profile-sidebar" style="height: 613px">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">
                    <img src="../../../resource/user_profile_pic/<?= $_SESSION['picture'] ?>" class="img-responsive" alt="">
                </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                        <?= $_SESSION['username'] ?>
                    </div>
                    <div class="profile-usertitle-job">
                        User
                    </div>
                </div>
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR BUTTONS -->
                <div class="profile-userbuttons">
                    <button type="button" class="btn btn-success btn-sm">Follow</button>
                    <button type="button" class="btn btn-danger btn-sm">Message</button>
                </div>
                <!-- END SIDEBAR BUTTONS -->
                <!-- SIDEBAR MENU -->
                <div class="profile-usermenu">
                    <ul class="nav">
                        <li>
                            <a href="../index.php">
                                <i class="glyphicon glyphicon-home"></i>
                                Home </a>
                        </li>
                        <li>
                            <a href="user_profile.php">
                                <i class="glyphicon glyphicon-home"></i>
                                Overview </a>
                        </li>
                        <li class="active">
                            <a href="account.php">
                                <i class="glyphicon glyphicon-user"></i>
                                Account Settings </a>
                        </li>
                    </ul>
                </div>
                <!-- END MENU -->
            </div>
        </div>
        <div class="col-md-9">
            <div class="profile-content">
                <div class="table-responsive text-center">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="border: black solid">
                    <?php
                    foreach ($account as $profiles) {
                        ?>
                        <tr>
                            <th>First Name</th>
                            <td><?= $profiles['first-name'] ?></td>
                        </tr>
                        <tr>
                            <th>Last Name</th>
                            <td><?= $profiles['last-name'] ?></td>
                        </tr>
                        <tr>
                            <th>Username</th>
                            <td><?= $profiles['username'] ?></td>
                        </tr>
                        <tr>
                            <th>Password</th>
                            <td><?= $profiles['pass'] ?></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><?= $profiles['email'] ?></td>
                        </tr>
                        <tr>
                            <th>Contact No</th>
                            <td><?= $profiles['contact-no'] ?></td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td><?= $profiles['address'] ?></td>
                        </tr>
                        <tr>
                            <th>NID</th>
                            <td><?= $profiles['nid-no'] ?></td>
                        </tr>
                        <tr>
                            <th>Date of Birth</th>
                            <td><?= $profiles['dob'] ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
                </div>
                <div class="text-center">
                    <button class="btn btn-danger" style="margin-top: 170px"><a href="update.php" style="color: white">Update</a></button>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>