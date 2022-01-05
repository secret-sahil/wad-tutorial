<?php 
include ("../db.php");
$username= $_POST['username'];
$password= $_POST['pwd'];
$query= $db->prepare("SELECT * FROM admin where username=:username and password=:pwd");
$query->execute(array(
    ':username'=>$username,
    ':pwd'=>$password,
));
$data= $query->fetchAll();
$data= (count($data));
if ($data>0) {
    header('location:sucess.php');
}
else{
    header('location:./');
}
?>