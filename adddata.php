<?php
include "inc/conn.php";


// echo "There are " . $count . " checkboxe(s) are checked";
// print_r($checked_arr);
// var_dump($checked_arr);


if (isset($_POST['submit'])) {
    $item = $_GET['item'];
    $id = $_GET['id'];
    $count = $_GET['count'];


    $newItem = strtolower($item);
    $sgot = $_POST['sgot'];
    $sgpt = $_POST['sgpt'];
    $alkaline = $_POST['alkaline'];
    $ggt = $_POST['ggt'];
    $bilirubin = $_POST['bilirubin'];
    $albumin = $_POST['albumin'];
    $protien = $_POST['protien'];
    $pt = $_POST['pt'];


    $q1 = "INSERT INTO liver (userid, sgot, sgpt, alkaline, ggt, bilirubin, albumin, protien, pt) VALUES ($id,'$sgot','$sgpt','$alkaline','$ggt','$bilirubin','$albumin','$protien','$pt')";
    $liverinsert = $conn->query($q1);
    if ($liverinsert) {



        header("Location:finalpage.php?id=$id&item=$item&count=$count");
    }
}