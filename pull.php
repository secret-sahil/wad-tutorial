<?php 
include ("head.php");
include ("nav.php");
include ("db.php");

$query= $db->query("SELECT * FROM cform");
    echo '<div class="tablebox">';
    echo'<table class="table">';
    echo'<tr><th>S.no</th>
    <th>Full Name</th>
    <th>Email ID</th>
    <th>Message By user</th></tr>
    ';
$a=1;
    while($data= $query->fetch()){
        
        echo "<tr>";
        echo "<td>".$a."</td>";
        echo "<td>".$data['fullname']."</td>";
        echo "<td>".$data['email']."</td>";
        echo "<td>".$data['message']."</td>";
        echo "</tr>";
        $a=$a+1;
    }
    echo'</table></div>';
?>