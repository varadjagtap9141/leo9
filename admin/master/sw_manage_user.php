<?php
include "navbar.php";
?>
<div class="row g-3">
    <div class="col-md-12">
        <button class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#modalCenter">Add
            User</button>
    </div>
</div>
<div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Manage User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="../components/sw_save_vendor.php" method="POST" enctype="multipart/form-data">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="user_name">Vendor Name</label>
                                <input type="text" class="form-control" id="user_name" name="user_name"
                                    placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone_no">Contact No</label>
                                <input type="number" class="form-control" id="phone_no" name="phone_no" placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-select" id="status" name="status" required>
                                    <option value="">Select Status</option>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="branch_id">Branch</label>
                                <select class="form-select" id="branch_id" name="branch_id" required>
                                    <option value="">Select Branch</option>
                                    <?php
                                    $query = "SELECT * FROM branches";
                                    $result = mysqli_query($conn, $query);
                                    while($branch_row=mysqli_fetch_assoc($result))
                                    {
                                        ?>
                                        <option value="<?=$branch_row['branch_id']?>"><?=$branch_row['branch_name']?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="status">Role</label>
                                <select class="form-select" id="status" name="status" required>
                                    <option value="">Select Status</option>
                                    <?php
                                    $query="SELECT * FROM roles";
                                    $result=mysqli_query($conn,$query);
                                    while($role_row=mysqli_fetch_assoc($result))
                                    {
                                        ?>
                                        <option value="<?=$role_row['role_id']?>"><?=$role_row['role']?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="profile">Upload Profile Picture</label>
                                <input type="file" class="form-control" id="profile" name="profile" placeholder=""
                                    required>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-3 float-end">Add Vendor</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>