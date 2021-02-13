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
$uname = $_REQUEST['uname'];
$msg = $_REQUEST['msg'];
$key= $_SESSION['user-key'];
//
// check unique user name

$query ="SELECT * FROM `message_logs` where `username`= '$uname'";
$Stmt = $conn->prepare($query);
//$stmt->bindParam(':title' , $_title);
$result = $Stmt->execute();
$unique =$Stmt->fetch();


//
// insert username in message_logs table
//
if ($unique==null){
    $query ="INSERT INTO `message_logs` (`username`,`user_key`) VALUES ('$uname','$key');";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':username' , $uname);
    $stmt->bindParam(':user_key' , $key);
    $result = $stmt->execute();
}


//
// msg insert into message_store table
//
$query ="INSERT INTO `message_store` (`username`,`user_key`,`msg`) VALUES ('$uname','$key','$msg');";
$stmt = $conn->prepare($query);
$stmt->bindParam(':username' , $uname);
$stmt->bindParam(':user_key' , $key);
$stmt->bindParam(':msg' , $msg);
$result = $stmt->execute();


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



<!--<table>
    <tr>
        <td><?/*=$m['username'] */?></td>
        <td><?/*=$m['msg'] */?></td>
    </tr>
</table>-->
