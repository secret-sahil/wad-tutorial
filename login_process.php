<?php include"db.php"; 
session_start();
$username=$_POST['username'];
$password= $_POST['pwd'];

$query= $db->prepare('select * from admin where username=:username and password=:password');
$query->execute(array(
    ':username'=>$username,
    ':password'=>$password,
));
$data=$query->fetchAll();
$count= count($data);
if ($count>0) {
    header("location:pull.php");
    $_SESSION['login']=$username;
}
else{
    header("location:login.php?error=1");
}
?>