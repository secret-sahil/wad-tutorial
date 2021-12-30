<?php
include ("head.php"); // ()parenthesis
?>

<body>
  <!-- Nav Bar start -->
  <?php include ("nav.php") ?>
  <!-- Nav Bar end -->
  <form action="push.php" method="POST">
    <div class="cform">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="f" placeholder="Full Name" required>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput2" name="e" placeholder="name@example.com" required>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3" required></textarea>
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