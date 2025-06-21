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
                <form action="../components/sw_save_user.php" method="POST" enctype="multipart/form-data">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="user_name">User Name</label>
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
                                    $query = "SELECT branch_id,branch_name FROM branches";
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
                                <label for="role_id">Role</label>
                                <select class="form-select" id="role_id" name="role_id" required>
                                    <option value="">Select Role</option>
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
<div class="row mt-4">
    <div class="col-md-12">
        <div class="card card-body table-responsive">
            <h5>User List</h5>
            <table class="table table-bordered table-hover text-center">
                <thead>
                    <tr>
                        <th>srno</th>
                        <th>Name</th>
                        <th>Branch</th>
                        <th>Role</th>
                        <th>Phone No</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query="SELECT user.user_id,
                    user.user_name,
                    user.email,
                    user.phone_no,
                    user.profile,
                    user.status,
                    user.created_at,
                    branches.branch_name,
                    roles.role
                    FROM user
                    JOIN branches ON user.branch_id = branches.branch_id
                    JOIN roles ON user.role_id = roles.role_id";
                    $result=mysqli_query($conn,$query);
                    foreach($result as $key=>$user_row)
                    {
                        ?>
                        <tr>
                            <td><?=$key+1?></td>
                            <td><?=$user_row['user_name']?></td>
                            <td><?=$user_row['branch_name']?></td>
                            <td><?=$user_row['role']?></td>
                            <td><?=$user_row['phone_no']?></td>
                            <td class="d-flex justify-content-center gap-2">
                            <a class="btn btn-sm btn-secondary"
                                href="view_user.php?user_id=<?= $user_row['user_id'] ?>">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <a class="btn btn-sm btn-primary"
                                href="edit_sw_user.php?user_id=<?= $user_row['user_id'] ?>">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <a class="btn btn-sm btn-danger"
                                href="../components/delete_sw_user.php?user_id=<?= $user_row['user_id'] ?>"
                                onclick="return confirm('Are you sure?')">
                                <i class="fa-solid fa-trash"></i>
                            </a>
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
<?php
include "footer.php";
?>