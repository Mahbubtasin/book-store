<?php
session_start();
$userName = $_POST['userName'];
$userPassword = $_POST['password'];

echo $userName;
echo $userPassword;

//database connection
try {
    $conn = new PDO("mysql:host=localhost;dbname=bookdb", "root", "");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
$query = "SELECT * FROM `user-reg` where `username`= '$userName' and`pass`= '$userPassword' ";

$stmt = $conn->prepare($query);
//$stmt->bindParam(':title' , $_title);
$result = $stmt->execute();
$admin =$stmt->fetch();
/*var_dump($admin);*/
echo $admin['username'];
echo $admin['pass'];
if($admin['username']== $userName and $admin['pass']==$userPassword)  {
    //session_register("myusername");
    $_SESSION['username'] = $userName;
    echo $_SESSION['username'] ;
    $_SESSION['fullName']= $admin['first-name'];
    $_SESSION['total-cost']=null;
    $_SESSION['set-bill-id']=null;
    $_SESSION['message-front']='Successfully login';
    $_SESSION['key']=null;
    $a=2345;
    $_SESSION['user-key']=2345;

    header('Location:../../../front/user/index.php');
}
else {
    $_SESSION['message-front']="Invalid username or password..!!";
    /*$error = "Your Login Name or Password is invalid";
    echo $error;*/
    header('Location:../../../front/user/index.php');
}
?>
<a href="></a>
