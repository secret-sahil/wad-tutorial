<?php include "head.php" ?>
<?php include "nav.php" ?>

<form method="POST" action="login_process.php">
    <div class="cform">
        <?php 
        if (isset($_GET['error'])) { ?>
            <p class="error">Wrong username or password</p>
        <?php }?>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="text" name="username" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="pwd" class="form-control">
        </div>
        <button type="submit" class="button">Submit</button>
    </div>
</form>

<?php include "footer.php" ?>