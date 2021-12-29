<?php
session_start();
include ("head.php"); // ()parenthesis
// echo $_SESSION["name"]; //for testing if vale coming in session
if(empty($_SESSION["name"])){
    header("location:contactus.php");
    session_destroy(); 
}
session_destroy();
?>
<body>
    <!-- Nav Bar start -->
    <?php include ("nav.php") ?>
    <!-- Nav Bar end -->
    <div class="thanks">
        <h1>Thanks your form has been submitted. We will Contcat you ASAP!</h1>
        <br>
        <a href="./index.php"><button class="button">Back To Home</button></a>
    </div>
    <!-- Footer Start -->
    <?php include ("footer.php");?>
    <!-- Footer End -->
</body>
</html>