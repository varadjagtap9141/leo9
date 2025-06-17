<?php
include "navbar.php";
extract($_GET);
$query="SELECT * FROM roles WHERE role_id=$role_id";
$result=mysqli_query($conn,$query);
$role_row=mysqli_fetch_assoc($result);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-body">
            <h5>Manage Role</h5>
            <form action="../components/sw_update_role.php" method="POST">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="hidden" name="role_id" value="<?=$role_row['role_id']?>">
                                <label for="role">Role Name</label>
                                <input type="text" class="form-control" id="role" name="role"
                                    placeholder="eg: Accountant" value="<?=$role_row['role']?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-select" id="status" name="status" required>
                                    <option value="">Select Status</option>
                                    <option value="active" <?=($role_row['status']=='active') ? 'selected' : ''?>>Active</option>
                                    <option value="inactive" <?=($role_row['status']=='inactive') ? 'selected' : ''?>>Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">Role Name</label>
                                <textarea class="form-control" name="description" id=""><?=$role_row['description']?></textarea>
                            </div>
                        </div>
                    </div>
                    <button onClick="return confirm('Are You Sure?')" class="btn btn-primary mt-3 float-end">Update Role</button>
                </form>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>