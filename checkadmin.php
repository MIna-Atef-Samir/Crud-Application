<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    if ($username == "Mina Atef" && $pass == 1234) {
        $_SESSION['loged'] = true;
        header('Location:enterdata1.php');
    } else {
        header("Location:index.php");
        $_SESSION['error'] = "Password or User-Name unvalid!";
    }
} else {
    header("Location:index.php");
    $_SESSION['error'] = "Please Login first!";
}