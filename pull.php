<?php 
    require_once("db.php");
    $query= $db->query('SELECT * FROM cform');
    while ($data = $query->fetch()){
        echo "<h1>".$data['email']."<br>";
    }
?>


$ //variable example ($sahil=10;)
$_  //method exampkle ($sahil=$_POST["f"];)
  

<!-- {

{"1",
"Aman Srivastav"
aman@gmail.com"
"I love to dev. web pages with CSS and HTML."},
	

{"2"
"Iqra Zafar"
"iqra@gmail.com"
"Iqra is a good girl!"},
	

{"3"
"Abhishek Kumar"
"abhi@gmail.com"
"Abhi is a bad boy!"},
	

{"4"
"Sahil" 
"sahil@gmail.com"
"I love coding!"}

} -->