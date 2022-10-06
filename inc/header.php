<?php
session_start();
$activePage = basename($_SERVER['PHP_SELF'], ".php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inc/bootstrap.min.css">
    <link rel="stylesheet" href="inc/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;400;700;1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <title>الاختيار</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto">
                <!-- <li class="nav-item <?= ($activePage == 'index') ? 'active' : ''; ?>">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li> -->
                <!-- <li class="nav-item <?= ($activePage == 'patientdata') ? 'active' : ''; ?> <?php if (!isset($_SESSION['loged'])) {
                                                                                                    echo "d-none";
                                                                                                } ?>">
                    <a class="nav-link" href="finalpage.php">Print</a>
                </li> -->
                <li class="nav-item <?= ($activePage == 'showpatients') ? 'active' : ''; ?> <?php if (!isset($_SESSION['loged'])) {
                                                                                                echo "d-none";
                                                                                            } ?>">
                    <a class="nav-link" href="showpatients.php">All Patients</a>
                </li>
                <li class="nav-item <?= ($activePage == 'enterdata1') ? 'active' : ''; ?> <?php if (!isset($_SESSION['loged'])) {
                                                                                                echo "d-none";
                                                                                            } ?>">
                    <a class="nav-link" href="enterdata1.php">New Patient</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="inc/logout.php">Logout</a>
                </li>
            </ul>
        </div>
        <a class="navbar-brand ml-auto" href="#">الاختيار</a>
    </nav>