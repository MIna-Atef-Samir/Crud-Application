<?php

include "inc/conn.php";

if ($_GET['id']) {
    $id = $_GET['id'];
    $qdel = "DELETE FROM ekhteyar WHERE id=$id";
    $delete = $conn->query($qdel);
    if ($id == "all") {
        $qdel = "DELETE FROM ekhteyar";
        $delete = $conn->query($qdel);
    }
    if ($delete) {
        header("Location: showpatients.php");
    } else {
        echo "errror!";
    }
}