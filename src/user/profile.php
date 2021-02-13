<?php


namespace General\user;
use General\db;

class profile
{
    public $conn = null;
    public function __construct()
    {
        $this->conn = db::connect();
    }

    public function showprofile()
    {
        $query = "SELECT * FROM `user-reg` WHERE `username` = '".$_SESSION['username']."'";
        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }

    public function updateprofile()
    {
        $_firstname = $_POST['first-name'];
        $_lastname = $_POST['last-name'];

        $_email = $_POST['email'];
        $_password = $_POST['pass'];
        $_pass_verify = $_POST['pass-verif'];
        $_contact = $_POST['contact-no'];
        $_username = $_POST['username'];
        $_address = $_POST['address'];

        $_nid = $_POST['nid-no'];
        $_birthday = $_POST['dob'];

        $update = "UPDATE `user-reg` SET `first-name` = '$_firstname',`last-name` = '$_lastname',`email` = '$_email',`pass` = '$_password',`pass-verif` = '$_pass_verify',`contact-no` = '$_contact',`address` = '$_address',`nid-no` = '$_nid',`dob` = '$_birthday' WHERE `username` = '".$_SESSION['username']."'";

        $stmt = $this->conn->prepare($update);
        $stmt->bindParam(':first-name', $_firstname);
        $stmt->bindParam(':last-name', $_lastname);
        $stmt->bindParam(':username', $_username);
        $stmt->bindParam(':email', $_email);
        $stmt->bindParam(':pass', $_password);
        $stmt->bindParam(':pass-verif', $_pass_verify);
        $stmt->bindParam(':contact-no', $_contact);

        $stmt->bindParam(':address', $_address);
        $stmt->bindParam(':nid-no', $_nid);
        $stmt->bindParam(':dob', $_birthday);

        $res = $stmt->execute();

        return $res;
    }
}