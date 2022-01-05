<?php 
include ("head.php");?>

<script>
    function del(sno){
        if (confirm("Do you really want to delete")){
            window.location.href= 'pull.php?delete='+sno
        }
    }
</script>

<?php include ("nav.php");
include ("db.php");

$query= $db->query("SELECT * FROM cform");
    echo '<div class="tablebox">';
    echo'<table class="table">';
    echo'<tr><th>S.no</th>
    <th>Full Name</th>
    <th>Email ID</th>
    <th>Message By user</th>
    <th>Operations</th>
    </tr>
    ';
$a=1;
    while($data= $query->fetch()){
        
        echo "<tr>";
        echo "<td>".$data['sno']."</td>";
        echo "<td>".$data['fullname']."</td>";
        echo "<td>".$data['email']."</td>";
        echo "<td>".$data['message']."</td>";
        echo "<td><button onClick=del(".$data['sno'].")>Deltete</button></td>";
        echo "</tr>";
        $a=$a+1;
    }
    echo'</table></div>';

function delete(){
    if (isset($_GET['delete'])){
    include('db.php');
    $query= $db->prepare('delete from cform where sno=:sno');
    $query->execute(array(
        ":sno"=>$_GET['delete']
    ));
    header('location:pull.php');
}
}
delete();
include "footer.php";
?>