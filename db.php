<?php
    // creating connection with DB using PDO 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname= "wad";
    try {
    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
    } catch(PDOException $e) {
    // echo "Connection failed: " . $e->getMessage();
    }
?>