<?php
include "navbar.php";
extract($_GET);
$query="SELECT * FROM client_slider WHERE client_id=$client_id";
$result=mysqli_query($conn,$query);
$client_row=mysqli_fetch_assoc($result);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-body">
            <h5>Manage Client</h5>
            <hr />
            <form action="../components/update_client.php" method="POST" enctype="multipart/form-data">
                <div class="row g-3">
                    <div class="col-md-6 d-flex justify-content-center">
                    <div class="d-flex align-item-center">
                        <img src="../components/uploads/<?=$client_row['logo']?>" alt="Client Logo" class="img-fluid">
                    </div>
                    </div>
                    <div class="col-md-6">
                        <input type="hidden" value="<?=$client_row['client_id']?>" name="client_id">
                        <div class="form-group mb-3">
                            <label for="client_name">Client Name</label>
                            <input type="text" class="form-control" id="client_name" name="client_name"
                                value="<?=$client_row['client_name']?>" placeholder="Enter client name" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="phone_no">Client Contact No</label>
                            <input type="number" class="form-control" id="phone_no" name="phone_no"
                                value="<?=$client_row['phone_no']?>" placeholder="Enter Contact No" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="client_email">Client Email</label>
                            <input type="email" class="form-control" id="client_email" name="client_email"
                                value="<?=$client_row['client_email']?>" placeholder="Enter client email" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="logo">Upload Client Logo</label>
                            <input type="file" class="form-control" id="logo" name="logo">
                        </div>
                    </div>
                </div>
                <button onClick="return confirm('Are You Sure?')" class="btn btn-primary mt-3 float-end">Update
                    Clients</button>
            </form>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>