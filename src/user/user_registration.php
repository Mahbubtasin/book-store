<?php
/**
 * Created by PhpStorm.
 * User: PHP
 * Date: 12/8/2019
 * Time: 2:08 PM
 */

namespace General\user;

use General\db;

class user_registration
{
    public $conn = null;
    public function __construct()
    {
        $this->conn = db::connect();
    }

    public function registration()
    {

        $_firstname = $_POST['firstName'];
        $_lastname = $_POST['lastName'];

        $_username = $_POST['userName'];
        $_picture = $_FILES['image']['name'];
        $_email = $_POST['email'];
        $_password = $_POST['pass'];
        $_pass_verify = $_POST['pass_verify'];
        $_contact = $_POST['contact_no'];

        $_address = $_POST['address'];

        $_nid = $_POST['nid_no'];
        $_birthday = $_POST['dob'];

        $appRootPhoto ='resource/user_profile_pic/'.$_FILES['image']['name'];

        if($_FILES['image']['type'] == ('image/jpeg' or 'png/jpg')) {
            echo "Thank you for uploading right file";

//. photo
            $target_photo = $_FILES["image"]["tmp_name"];
            $destination_photo = '../../../' . $appRootPhoto;
            $isPhotoMoved = move_uploaded_file($target_photo, $destination_photo);
            echo $isPhotoMoved;



            $store = "INSERT INTO `user-reg` (`first-name`,`last-name`,`username`,`picture`,`email`,`pass`,`pass-verif`,`contact-no`,`address`,`nid-no`,`dob`) 
            VALUES ('$_firstname','$_lastname','$_username','$appRootPhoto','$_email','$_password','$_pass_verify','$_contact','$_address','$_nid','$_birthday')";

            $stmt = $this->conn->prepare($store);
            $stmt->bindParam(':first-name', $_firstname);
            $stmt->bindParam(':last-name', $_lastname);
            $stmt->bindParam(':username', $_username);
            $stmt->bindParam(':picture', $_picture);
            $stmt->bindParam(':email', $_email);
            $stmt->bindParam(':pass', $_password);
            $stmt->bindParam(':pass-verif', $_pass_verify);
            $stmt->bindParam(':contact-no', $_contact);

            $stmt->bindParam(':address', $_address);
            $stmt->bindParam(':nid-no', $_nid);
            $stmt->bindParam(':dob', $_birthday);

            $res = $stmt->execute();
            $r = 1;
        }
        else
        {
            echo "Error Detected";
            $r = 0;
        }
        return $r;
    }

}

