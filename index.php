<?php
include "inc/header.php";
include "inc/conn.php";
?>

<header>
    <img width="100%" src="inc/images/cover.jpeg" alt="">
    <div class="cover">
        <div class="alert alert-danger errror <?php if (!isset($_SESSION['error'])) {
                                                    echo "d-none";
                                                } ?>" role="alert">
            <?= $_SESSION['error'] ?>
        </div>
        <form class="admin" action="checkadmin.php" method="POST">
            <h2 class="text-center">Admin-Panel</h2>
            <div class="form-group">
                <label for="exampleInputEmail1">User-Name</label>
                <input name="username" type="text" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input name="pass" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</header>












<?php
include "inc/footer.php"
?>