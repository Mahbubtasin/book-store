<?php
session_start();
try {
    $conn = new PDO("mysql:host=localhost;dbname=bookdb", "root", "");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    /*echo "Connected successfully";*/
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
$key= $_POST['id'];

//
//select message_logs id
//
$query ="SELECT * FROM `message_store` where `user_key`= '$key'";
$Stmt = $conn->prepare($query);
//$stmt->bindParam(':title' , $_title);
$result = $Stmt->execute();
$msg =$Stmt->fetchAll();

foreach ($msg as $m){
    echo $m['username'] .':'.$m['msg'].'<br>';
}?>
