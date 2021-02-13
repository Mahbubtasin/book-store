<?php


namespace General\admin;
use General\db;

class all_user
{
    public $conn = null;
    public function __construct()
    {
        $this->conn = db::connect();
    }

    public function show_all_user()
    {
        $sql = "SELECT * FROM `user-reg`";
        $stmt = $this->conn->prepare($sql);
        $result = $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
    public function singleUser($id){
        $Query = "SELECT * FROM `user-reg` WHERE `user-reg-id` = '$id' ";
        $cartStmt = $this->conn->prepare($Query);
        $result = $cartStmt->execute();
        $allUser = $cartStmt->fetch();
        return $allUser;
    }

    public function delete_user($id)
    {
        $del = "DELETE FROM `user-reg` WHERE `user-reg-id` = '$id'";
        $stmt = $this->conn->prepare($del);
        $result = $stmt->execute();
        return $result;
    }

    public function update_user($data)
    {
        $_id = $_POST['user-id'];
        $_firstname = $_POST['first-name'];
        $_lastname = $_POST['last-name'];

        $_email = $_POST['email'];
        $_password = $_POST['pass'];
        $_verfy_password = $_POST['pass-verif'];
        $_contact = $_POST['contact-no'];
        $_address = $_POST['address'];

        $_birthday = $_POST['dob'];

        $update = "UPDATE `user-reg` SET `first-name` = '$_firstname', `last-name` = '$_lastname', `email` = '$_email', `pass` = '$_password', `pass-verif` = '$_verfy_password', `contact-no` = '$_contact', `address` = '$_address', `dob` = '$_birthday' WHERE `user-reg`.`user-reg-id` = '$_id';";

        $stmt = $this->conn->prepare($update);
        $stmt->bindParam(':first-name', $_firstname);
        $stmt->bindParam(':last-name', $_lastname);
//        $stmt->bindParam(':username', $_username);
        $stmt->bindParam(':email', $_email);
        $stmt->bindParam(':pass', $_password);
        $stmt->bindParam(':pass-verif', $_verfy_password);
        $stmt->bindParam(':contact-no', $_contact);

        $stmt->bindParam(':address', $_address);
//        $stmt->bindParam(':nid-no', $_nid);
        $stmt->bindParam(':dob', $_birthday);

        $res = $stmt->execute();

        return $res;
    }
}