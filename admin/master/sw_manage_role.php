<?php
include "navbar.php";
?>
<div class="row g-3">
    <div class="col-md-12">
        <button class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#modalCenter">Add
            Role</button>
    </div>
</div>
<div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Manage Branch</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="../components/sw_save_role.php" method="POST">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="role">Role Name</label>
                                <input type="text" class="form-control" id="role" name="role"
                                    placeholder="eg: Accountant" required>
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
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">Role Name</label>
                                <textarea class="form-control" name="description" id=""></textarea>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-3 float-end">Add Role</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-12">
        <div class="card card-body table-responsive">
            <h5>Role List</h5>
            <table class="table table-bordered table-hover text-center">
                <thead>
                    <tr>
                        <th>Srno</th>
                        <th>Role Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    extract($_GET);
                    $query="SELECT * FROM roles";
                    $result=mysqli_query($conn, $query);
                    foreach($result as $key=>$role_row)
                    {
                        ?>
                    <tr>
                        <td><?=$key+1?></td>
                        <td><?=$role_row['role']?></td>
                        <td>
                            <?php
                        if($role_row['status']=='active')
                        {
                        ?>
                            <span class="badge rounded-pill bg-success"><?=$role_row['status']?></span>
                            <?php
                        }
                        ?>
                            <?php
                        if($role_row['status']=='inactive')
                        {
                        ?>
                            <span class="badge rounded-pill bg-danger"><?=$role_row['status']?></span>
                            <?php
                        }
                        ?>
                        </td>
                        <td class="d-flex justify-content-center gap-2">
                            <a class="btn btn-sm btn-primary"
                                href="sw_edit_role.php?role_id=<?=$role_row['role_id']?>"> <i
                                    class="fa-solid fa-pen-to-square"></i></a>
                            <a class="btn btn-sm btn-danger"
                                href="../components/sw_delete_role.php?role_id=<?=$role_row['role_id']?>"
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
<?php
include "footer.php";
?>