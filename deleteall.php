<?php

include "inc/header.php";
include "inc/conn.php";

if ($_GET['id']) {
    $id = $_GET['id'];

?>
<div class="qest text-center mx-auto mt-5 bg-dark w-50 p-5 rounded">
    <h1 class="text-warning">Are you Sure ?</h1>
    <a href="delete.php?id=all" class="btn btn-danger mx-2">DELETE ALL</a>
    <a href="showpatients.php" class="btn btn-info mx-2">Cancel</a>
</div>



<?php
}
include "inc/footer.php";