<?php
include "navbar.php";

// Fetch all job cards
$query = "SELECT * FROM job_cards";
$result = mysqli_query($conn, $query);
?>

<!-- Dropdown Menu -->
<div class="dropdown float-end">
    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        Select Job Card Type
    </button>
    <ul class="dropdown-menu">
        <?php while($card_row = mysqli_fetch_assoc($result)) { ?>
        <li>
            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                data-bs-target="#modal_<?= $card_row['job_card_type_id'] ?>">
                <?=$card_row['job_card_cats']?>
            </a>
        </li>
        <?php } ?>
    </ul>
</div>

<?php
mysqli_data_seek($result, 0);
while($row = mysqli_fetch_assoc($result)) {
    $id = $row['job_card_type_id'];
    $cat = $row['job_card_cats'];
?>

<div class="modal fade" id="modal_<?= $id ?>" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?= $cat ?> Job Card</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form action="../components/save_job_card.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="job_card_type_id" value="<?= $id ?>">

                    <?php 
                    if ($id == 1) 
                    { ?>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label>Client Name</label>
                            <input type="text" name="client_name" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label>Logo</label>
                            <input type="file" name="logo" class="form-control">
                        </div>
                    </div>
                    <?php } 
                    elseif ($id == 2) { 
                        ?>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label>Agency Name</label>
                            <input type="text" name="agency_name" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label>Contact Person</label>
                            <input type="text" name="contact_person" class="form-control" required>
                        </div>
                    </div>
                    <?php }  
                    ?>

                    <button class="btn btn-primary mt-3 float-end">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php } ?>


<?php include "footer.php"; ?>