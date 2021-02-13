<?php
include_once ('../../../vendor/autoload.php');
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!--    <link rel="stylesheet" type="text/css" href="../styles/profile.css">-->
    <title>Update Profile</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2 class="text-center">Update Form</h2>
    <form class="form-horizontal" action="../../../process/user-process/profile/update_process.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label class="control-label col-sm-2" for="firstname">First Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="firstname" placeholder="Enter first name" name="first-name">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="lastname">Last Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="lastname" placeholder="Enter last name" name="last-name">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="password">Password:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="pass">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="password-verify">Retype Password:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="password-verif" placeholder="Enter password again" name="pass-verif">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="contact-no">Contact No:</label>
            <div class="col-sm-10">
                <input type="tel" class="form-control" id="contact-no" placeholder="Enter Number" name="contact-no">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="address">Address:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="address" placeholder="Enter adress" name="address">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="nid">NID No:</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="nid" placeholder="Enter nid no" name="nid-no">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="dob">DoB:</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="dob" placeholder="Enter dob" name="dob">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success">Submit</button>
                <a href="account.php" class="btn btn-danger">Cancel</a>
            </div>

        </div>
    </form>
</div>

</body>
</html>

</body>
</html>