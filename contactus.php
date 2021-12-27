<?php
include ("head.php"); // ()parenthesis
?>

<body>
  <!-- Nav Bar start -->
  <?php include ("nav.php") ?>
  <!-- Nav Bar end -->
  <form action="thanks.php">
    <div class="cform">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Full Name">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="name@example.com">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <button type="submit" class="button">Submit</button>
    </div>
  </form>
</body>

</html>