<?php
include "navbar.php";
extract($_GET);
$query="SELECT * FROM branches WHERE branch_id=$branch_id";
$result=mysqli_query($conn, $query);
$branch_row=mysqli_fetch_assoc($result);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-body">
            <h5>Manage Branch</h5>
            <form action="../components/sw_update_branch.php" method="POST">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="hidden" name="branch_id" value="<?=$branch_row['branch_id'];?>">
                            <div class="form-group">
                                <label for="branch_name">Branch Name</label>
                                <input type="text" class="form-control" id="branch_name" name="branch_name"
                                    placeholder="eg:Pune" value="<?=$branch_row['branch_name']?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone_no">Contact No</label>
                                <input type="number" class="form-control" id="phone_no" name="phone_no" value="<?=$branch_row['phone_no']?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" class="form-control" id="city" name="city" value="<?=$branch_row['city']?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="district">District</label>
                                <input type="text" class="form-control" id="district" name="district" value="<?=$branch_row['district']?>" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="pincode">Pincode</label>
                                <input type="number" class="form-control" id="pincode" name="pincode" value="<?=$branch_row['pincode']?>" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="<?=$branch_row['email']?>" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-select" id="status" name="status" required>
                                    <option value="">Select Status</option>
                                    <option value="active" <?=($branch_row['status']=='active') ? 'selected' : ''?>>Active</option>
                                    <option value="unactive" <?=($branch_row['status']=='unactive') ? 'selected' : ''?>>Unactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="address">Branch Address</label>
                                <textarea class="form-control" name="address" id=""><?=$branch_row['address']?></textarea>
                            </div>
                        </div>
                    </div>
                    <button onClick="return confirm('Are You Sure?')" class="btn btn-primary mt-3 float-end">Update Client</button>
                </form>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>