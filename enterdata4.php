<?php

include "inc/header.php";
include "inc/conn.php";


// echo "There are " . $count . " checkboxe(s) are checked";
// print_r($checked_arr);
// var_dump($checked_arr);


if (isset($_POST['submit'])) {
    $resultt = $_POST['resultt'];
    $item = $_GET['item'];
    $id = $_GET['id'];
    $count = $_GET['count'];
    $newItem = strtolower($item);

    // $qsub = "UPDATE " . $newItem . " SET results= " . $resultt . "";
    // $update = $conn->query($qsub);
    header("Location:finalpage.php?id=$id&item=$item&count=$count");
}





if (isset($_SESSION['loged'])) {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $id = $_GET['id'];
        if (isset($_POST['checkbox'])) {
            $checked_arr = $_POST['checkbox'];
            $count = count($checked_arr);
        } else {

            $count = 0;
        }

        if ($count == 0) {
?>
<div class="container text-center mt-5">
    <h1 class="text-center">Please Select The Tests First!</h1>
    <a href="enterdata3.php?id=<?= $id ?>" class="btn btn-outline-info ">Select</a>
    <a href="showpatients.php" class="btn btn-outline-info ">Back to All Patients</a>
</div>

<?php
        } else { ?>



<div class="container my-5">
    <?php
                foreach ($checked_arr as $item) {
                    if (in_array($item, $checked_arr)) {
                ?>
    <form action="enterdata4.php?id=<?= $id ?>&item=<?= $item ?>&count=<?= $count ?>" method="post">
        <table class="table text-center">
            <thead class="thead-dark">
                <h4 class="bg-info text-white d-inline-block p-2 my-2 rounded-pill"><?= $item ?></h4>
                <tr>
                    <th scope="col"><?= strtoupper("sgot") ?> </th>
                    <th scope="col"><?= strtoupper("sgpt") ?></th>
                    <th scope="col"><?= strtoupper("alkaline") ?></th>
                    <th scope="col"><?= strtoupper("ggt") ?></th>
                    <th scope="col"><?= strtoupper("bilirubin") ?></th>
                    <th scope="col"><?= strtoupper("albumin") ?></th>
                    <th scope="col"><?= strtoupper("protien") ?></th>
                    <th scope="col"><?= strtoupper("pt") ?></th>

                </tr>
            </thead>
            <tbody>

                <tr>

                    <td> <input name="sgot" type="text" class="form-control"> </td>
                    <td> <input name="sgpt" type="text" class="form-control"> </td>
                    <td> <input name="alkaline" type="text" class="form-control"> </td>
                    <td> <input name="ggt" type="text" class="form-control"> </td>
                    <td> <input name="bilirubin" type="text" class="form-control"> </td>
                    <td> <input name="albumin" type="text" class="form-control"> </td>
                    <td> <input name="protien" type="text" class="form-control"> </td>
                    <td> <input name="pt" type="text" class="form-control"> </td>

                </tr>
                <?php
                            } ?>
            </tbody>
        </table>
        <button name="submit" type="submit" class="btn btn-primary form-control">Done</button>
    </form>
    <?php  } ?>
</div>

<?php
        } ?>






<?php
    }
} else {
    header("Location:index.php");
}
include "inc/footer.php";