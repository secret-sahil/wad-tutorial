<?php 
    include "head.php";
    require_once("db.php");
    $query= $db->query('SELECT * FROM cform');
    include "nav.php";
    echo '<div class="tablebox">';
    echo'<table class="table">';
        echo'<tr>';
        echo '<th>S.no</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Message</th>
        <th>Delete</th>';

        echo'</tr>';
        while ($data = $query->fetch()){
            echo'<tr>';
            echo '<td>'.$data['sno'].'</td>';
            echo '<td>'.$data['fullname'].'</td>';
            echo '<td>'.$data['email'].'</td>';
            echo '<td>'.$data['message'].'</td>';
            echo '<td><a href="pull.php?delete='.$data['sno'].'"><button>Delete</button></td>';
            echo'</tr>';

        }
    echo'</table>';
    echo'</div>';

?>

<?php
    if (isset($_GET["delete"])){
    $sno= $_GET["delete"];
    $query= $db->prepare('delete from cform where sno=:sno');
    $query->execute(array(
        ':sno'=> $sno,
    ));
    header("location:pull.php");
    }
?>
















<!-- $ //variable example ($sahil=10;)
$_  //method exampkle ($sahil=$_POST["f"];) -->