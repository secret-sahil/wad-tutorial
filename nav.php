<?php session_start(); ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCl0Sh3VlB6I8rao2KKXKVa48va8bEtEdCDw&usqp=CAU" alt="" width="40" height="24" class="d-inline-block align-text-top">
      Tutorial
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="contactus.php">Contact Us</a>
        </li>
        <?php if (!empty($_SESSION['login'])){?>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="pull.php">View contact form</a>
        </li>
        <?php } ?>
      </ul>
      <?php if (empty($_SESSION['login'])){?>
      <a class="nounderline" href="login.php"><button class="btn btn-outline-success d-flex" type="submit">Login/SignUp</button></a>
      <?php }else{?>
        <a class="nounderline" href="logout.php"><button class="btn btn-outline-success d-flex" type="submit">Logout</button></a>
      <?php } ?>
      </div>
  </div>
</nav>