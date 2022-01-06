<?php
include ("head.php"); // ()parenthesis
?>

<body>
  <!-- Nav Bar start -->
  <?php include ("nav.php") ?>
  <!-- Nav Bar end -->
  <form action="push.php" method="POST">
    <div class="cform">
      <?php 
      if (isset($_GET['empty'])){
        echo'<p class="error">All fields are mandatory!<p>';
      }
      ?>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="f" placeholder="Full Name">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput2" name="e" placeholder="name@example.com">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3"></textarea>
      </div>
      <button type="submit" class="button">Submit</button>
    </div>
    <br>
  </form>
  <!-- Footer Start -->
  <?php include ("footer.php");?>
    <!-- Footer End -->
</body>

</html>