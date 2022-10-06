<?php
include "inc/header.php";
include "inc/conn.php";

if (isset($_SESSION['loged'])) {

?>

<div class="container mt-5">
    <div class="header">
        <div class="row justify-content-between">
            <div class="col-md-3 d-flex justify-content-center">
                <img class="img-fluid" src="inc/images/logo.jpeg" alt="">
            </div>
            <div class="col-md-3 d-flex justify-content-center">
                <img class="img-fluid" src="inc/images/big logo.png" alt="">
            </div>
        </div>
    </div>
</div>
































<?php

} else {
    header("Location:index.php");
    $_SESSION['error'] = "Please Login first!";
}

?>













<?php
include "inc/footer.php";
?>