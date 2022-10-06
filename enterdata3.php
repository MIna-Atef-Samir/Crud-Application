<?php
include "inc/header.php";
include "inc/conn.php";
if (isset($_SESSION['loged'])) {
    if ($_GET['id']) {
        $id = $_GET['id'];

        $qedit = "SELECT * FROM ekhteyar WHERE id=$id";
        $showdata = $conn->query($qedit);
?>
<header>
    <img width="100%" src="inc/images/cover.jpeg" alt="">
    <div class="cover">
        <div class="container justify-content-center">
            <?php
                    foreach ($showdata as $d) {
                    ?>

            <form class="info px-5 testss" action="showpatients.php?id=<?= $d['id'] ?>" method="POST">
                <h2 class="text-center mb-5">Choose The Wanted Tests!</h2>
                <div class="row justify-content-around">
                    <div class="col-md-3 form-check form-check-inline">
                        <input name="checkbox[]" class="form-check-input" type="checkbox" id="inlineCheckbox1"
                            value="Liver">
                        <label class="form-check-label" for="inlineCheckbox1">Liver Function Tests</label>
                    </div>
                    <div class="col-md-3 form-check form-check-inline">
                        <input name="checkbox[]" class="form-check-input" type="checkbox" id="inlineCheckbox2"
                            value="Kidney">
                        <label class="form-check-label" for="inlineCheckbox2">Kidney Function Tests</label>
                    </div>
                    <div class="col-md-3 form-check form-check-inline">
                        <input name="checkbox[]" class="form-check-input" type="checkbox" id="inlineCheckbox3"
                            value="Check">
                        <label class="form-check-label" for="inlineCheckbox3">Check Up </label>
                    </div>

                </div>
                <div class="row justify-content-around">
                    <div class="col-md-3 form-check form-check-inline ">
                        <input name="checkbox[]" class="form-check-input" type="checkbox" id="inlineCheckbox4"
                            value="Diabetic">
                        <label class="form-check-label" for="inlineCheckbox4">Diabetic Profile </label>
                    </div>
                    <div class="col-md-3 form-check form-check-inline">
                        <input name="checkbox[]" class="form-check-input" type="checkbox" id="inlineCheckbox5"
                            value="Hepatitis">
                        <label class="form-check-label" for="inlineCheckbox5">Hepatitis Markers</label>
                    </div>
                    <div class="col-md-3 form-check form-check-inline">
                        <input name="checkbox[]" class="form-check-input" type="checkbox" id="inlineCheckbox6"
                            value="Coagulation">
                        <label class="form-check-label" for="inlineCheckbox6">Coagulation Profile</label>
                    </div>


                </div>
                <div class="row justify-content-around">
                    <div class="col-md-3 form-check form-check-inline">
                        <input name="checkbox[]" class="form-check-input" type="checkbox" id="inlineCheckbox7"
                            value="Hormonal">
                        <label class="form-check-label" for="inlineCheckbox7">Hormonal Profile </label>
                    </div>
                    <div class="col-md-3 form-check form-check-inline">
                        <input name="checkbox[]" class="form-check-input" type="checkbox" id="inlineCheckbox8"
                            value="Tumour">
                        <label class="form-check-label" for="inlineCheckbox8">Tumour Markers </label>
                    </div>
                    <div class="col-md-3 form-check form-check-inline">
                        <input name="checkbox[]" class="form-check-input" type="checkbox" id="inlineCheckbox9"
                            value="Microbiology">
                        <label class="form-check-label" for="inlineCheckbox9">Microbiology Tests </label>
                    </div>
                </div>
                <div class="row justify-content-around">
                    <div class="col-md-3 form-check form-check-inline">
                        <input name="checkbox[]" class="form-check-input" type="checkbox" id="inlineCheckbox10"
                            value="Electrolytes">
                        <label class="form-check-label" for="inlineCheckbox10">Electrolytes </label>
                    </div>
                    <div class="col-md-3 form-check form-check-inline">
                        <input name="checkbox[]" class="form-check-input" type="checkbox" id="inlineCheckbox11"
                            value="Allergy">
                        <label class="form-check-label" for="inlineCheckbox11">Allergy Tests </label>
                    </div>
                    <div class="col-md-3 form-check form-check-inline">
                        <input name="checkbox[]" class="form-check-input" type="checkbox" id="inlineCheckbox12"
                            value="Cardiac">
                        <label class="form-check-label" for="inlineCheckbox12">Cardiac Profile </label>
                    </div>
                </div>
                <div class="row justify-content-around">
                    <div class="col-md-3 form-check form-check-inline">
                        <input name="checkbox[]" class="form-check-input" type="checkbox" id="inlineCheckbox13"
                            value="Fever">
                        <label class="form-check-label" for="inlineCheckbox13">Fever of Unkown Cause </label>
                    </div>
                    <div class="col-md-3 form-check form-check-inline">
                        <input name="checkbox[]" class="form-check-input" type="checkbox" id="inlineCheckbox14"
                            value="Recurrent">
                        <label class="form-check-label" for="inlineCheckbox14">Recurrent Abortion </label>
                    </div>
                    <div class="col-md-3 form-check form-check-inline">
                        <input name="checkbox[]" class="form-check-input" type="checkbox" id="inlineCheckbox15"
                            value="Autoimmune">
                        <label class="form-check-label" for="inlineCheckbox15">Autoimmune Profile </label>
                    </div>
                </div>
                <div class="row justify-content-around">
                    <div class="col-md-3 form-check form-check-inline">
                        <input name="checkbox[]" class="form-check-input" type="checkbox" id="inlineCheckbox16"
                            value="Cytogenetic">
                        <label class="form-check-label" for="inlineCheckbox16">Cytogenetic Tests </label>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8 mt-5">
                        <button type="submit" class="btn btn-primary form-control"> Next <i
                                class="bi bi-arrow-right-square"></i> </button>
                    </div>
                </div>
            </form>
            <?php } ?>
        </div>
    </div>








    <?php
    } else {
        echo "somthing wrong!";
    }
}
include "inc/footer.php";
    ?>