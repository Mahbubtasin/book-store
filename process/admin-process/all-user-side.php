<?php

//database connection
try {
    $conn = new PDO("mysql:host=localhost;dbname=bookdb", "root", "");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// insert command
$query = "SELECT * FROM `user-reg`";

// prepare statement
$stmt = $conn->prepare($query);
//$stmt->bindParam(':title' , $_title);
$result = $stmt->execute();
$users = $stmt->fetchAll();


?>



