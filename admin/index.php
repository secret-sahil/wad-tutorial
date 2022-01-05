<?php
include "../head.php";
include "../nav.php"; ?>

<form action="login_process.php" method='post'>
    <div class="loginform">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="pwd" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

<?php
include "../footer.php";
?>