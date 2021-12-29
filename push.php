<?php
    session_start();
    $fullname= $_POST["fullname"];
    $email= $_POST["email"];
    $message= $_POST["message"];
    $_SESSION["name"]=$fullname;
    // creating connection with DB using PDO 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname= "wad";
    try {
    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    }

    //storing data into cform table
    $query= $db->prepare('INSERT INTO cform (fullname, email, message) VALUES (:fullname, :email, :message)');
    $query->execute(array(
        ':fullname'=> $fullname,
        ':email'=>$email,
        ':message'=> $message,
    ));
    
    //redirecting to thanks.php page
    header ("location:thanks.php");
    
?>