<?php
    session_start();
    $fullname= $_POST["f"];
    $email= $_POST["e"];
    $message= $_POST["message"];
    $_SESSION["name"]=$fullname;
    require_once("db.php");

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