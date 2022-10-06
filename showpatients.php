<?php
include "inc/header.php";
include "inc/conn.php";

if (isset($_SESSION['loged'])) {
    if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['define'])) {

        $name = $_POST['name'];
        $nationality = $_POST['country'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $brunch = $_POST['brunch'];


        $q = "INSERT INTO `ekhteyar`(`name`, `phoneno`, `nationality`, `gender`, `regeterdate`, `age`, `brunch`) VALUES ('$name',$phone,'$nationality','$gender',Now(), $age, '$brunch')";
        $info = $conn->query($q);
    }

    if (isset($_POST['checkbox'])) {
        $checked_arr = $_POST['checkbox'];
        $count = count($checked_arr);
    } else {
        $count = 0;
    }


?>

<div class="container mt-5">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Nationality</th>
                <th scope="col">Gender</th>
                <th scope="col">Regesteration Date</th>
                <th scope="col">Update Date</th>
                <th scope="col">Age</th>
                <th scope="col">Tests</th>
                <th scope="col">Options</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $q3 = "SELECT * FROM ekhteyar ";
                $showdata = $conn->query($q3);
                foreach ($showdata as $s) {
                ?>
            <tr>
                <th scope="row"><?= $s['id'] ?></th>
                <td><?= $s['name'] ?></td>
                <td><?= $s['phoneno'] ?></td>
                <td><?= $s['nationality'] ?></td>
                <td><?= $s['gender'] ?></td>
                <td><?= $s['regeterdate'] ?></td>
                <td><?= $s['updatedate'] ?></td>
                <td><?= $s['age'] ?></td>
                <td><?php if (!isset($_POST['checkbox'])) {
                                echo "-";
                            } else {

                                $i = sizeof($checked_arr);
                                while ($i > 0) {
                                    echo $checked_arr[$i];
                                    $i--;
                                }
                            } ?></td>
                <td><a href="delete.php?id=<?= $s['id'] ?>" class="btn btn-danger"><i class="bi bi-x-lg"></i></a>
                    <a href="enterdata2.php?id=<?= $s['id'] ?>" class="btn btn-success"><i
                            class="bi bi-pencil-square"></i></a>
                    <a href="enterdata4.php?id=<?= $s['id'] ?>" class="btn btn-warning"><i
                            class="bi bi-file-person"></i></a>
                    <a href="" class="btn btn-info"><i class="bi bi-printer-fill"></i></a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <a href="deleteall.php?id=dell" class="btn btn-danger form-control w-25 mb-5">Clear All</i></a>

</div>


<?php

} else {
    header("Location:index.php");
}
include "inc/footer.php"
?>