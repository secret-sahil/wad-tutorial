<?php
    $fullname= $_POST["fullname"];
    $email= $_POST["email"];
    $message= $_POST["message"];

    // creating connection with DB using PDO 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname= "wad";
    try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    }
    
?>