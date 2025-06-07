<?php
include "navbar.php";
?>
<div class="row g-3">
    <div class="col-md-12">
        <button class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#modalCenter">Add Client</button>
    </div>
</div>
<div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Manage Client</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="../components/save_client.php" method="POST" enctype="multipart/form-data">
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="client_name">Client Name</label>
                            <input type="text" class="form-control" id="client_name" name="client_name" placeholder="Enter client name"
                                required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone_no">Client Contact No</label>
                            <input type="number" class="form-control" id="phone_no" name="phone_no" placeholder="Enter Contact No"
                                required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="client_email">Client Email</label>
                            <input type="email" class="form-control" id="client_email" name="client_email" placeholder="Enter client email"
                                required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="logo">Upload Client Logo</label>
                            <input type="file" class="form-control" id="logo" name="logo" placeholder=""
                                required>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary mt-3 float-end">Add Clients</button>
            </form>
            </div>
        </div>
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-12">
        <div class="card card-body table-responsive">
            <h5>Client List</h5>
            <table class="table table-bordered table-hover text-center">
                <thead>
                    <tr>
                        <th>Srno</th>
                        <th>Client Name</th>
                        <th>Contact No</th>
                        <th>Logo</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query="SELECT * FROM client_slider";
                    $result=mysqli_query($conn, $query);
                    foreach($result as $key=>$client_row)
                    {
                        ?>
                        <tr>
                            <td>
                                <?=$key+1?>
                            </td>
                            <td><?=$client_row['client_name']?></td>
                            <td><?=$client_row['phone_no']?></td>
                            <td><img height="auto" width="90" src="../components/uploads/<?=$client_row['logo']?>" alt=""></td>
                           <td class="d-flex justify-content-center gap-2">
                            <a class="btn btn-sm mt-3 btn-primary"
                                href="edit_client_slider.php?client_id=<?=$client_row['client_id']?>"> <i
                                    class="fa-solid fa-pen-to-square"></i></a>
                            <a class="btn btn-sm mt-3 btn-danger"
                                href="../components/delete_client_slider.php?client_id=<?=$client_row['client_id']?>"
                                onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash"></i></a>
                        </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
const phoneInput = document.getElementById('phone_no');
phoneInput.addEventListener('keypress', function(e) {
    if (this.type === "text") {
        e.preventDefault();
    }
});
</script>
<?php
include "footer.php";
?>