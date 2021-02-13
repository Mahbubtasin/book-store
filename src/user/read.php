<?php


namespace General\user;
use General\db;


class read
{
    public $conn = null;

    public function __construct()
    {
        $this->conn = db::connect();
    }

    public function checkPoints($userName){
        $getPointsQuery = "SELECT * FROM `user-reg` WHERE `username` = '$userName' ";
        $getPointsStmt = $this->conn->prepare($getPointsQuery);
        $result = $getPointsStmt->execute();
        $points= $getPointsStmt->fetch();
        return $points;
    }
    public function updatePoints($userName, $points){
        $updatePointsQuery="UPDATE `user-reg` SET `coins` = '$points' WHERE `user-reg`.`username` = '$userName'";
        $setPointsStmt = $this->conn->prepare($updatePointsQuery);
        $result = $setPointsStmt->execute();
        if ($result){
            $r = 1;
        }
        else{
            $r=0;
        }
        return $r;
    }




}