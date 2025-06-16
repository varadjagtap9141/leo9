<?php
include "navbar.php";
?>
<div class="row g-3">
    <div class="col-md-12">
        <button class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#modalCenter">Add
            Branch</button>
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
                <form action="../components/sw_save_branch.php" method="POST">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="branch_name">Branch Name</label>
                                <input type="text" class="form-control" id="branch_name" name="branch_name"
                                    placeholder="eg:Pune" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone_no">Contact No</label>
                                <input type="number" class="form-control" id="phone_no" name="phone_no" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" class="form-control" id="city" name="city" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="district">District</label>
                                <input type="text" class="form-control" id="district" name="district" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="pincode">Pincode</label>
                                <input type="number" class="form-control" id="pincode" name="pincode" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="col-md-4">
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
                                <label for="address">Branch Address</label>
                                <textarea class="form-control" name="address" id=""></textarea>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-3 float-end">Add Client</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-12">
        <div class="card card-body">
            <h5>Branch List</h5>
            <table class="table table-bordered text-center table-hover">
                <thead>
                    <tr>
                        <th>Srno</th>
                        <th>Branch Name</th>
                        <th>Contact No</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    extract($_GET);
                    $query = "SELECT * FROM branches";
                    $result = mysqli_query($conn, $query);
                    foreach($result as $key => $branch_row)
                    {
                        ?>
                    <tr>
                        <td><?=$key+1?></td>
                        <td><?=$branch_row['branch_name']?></td>
                        <td><?=$branch_row['phone_no']?></td>
                        <td><?=$branch_row['created_at']?></td>
                        <td class="d-flex justify-content-center gap-2">
                            <a class="btn btn-sm btn-secondary"
                                href="view_branch_detail.php?branch_id=<?=$branch_row['branch_id']?>"> <i
                                    class="fa-solid fa-eye"></i></a>
                            <a class="btn btn-sm btn-primary"
                                href="edit_sw_branch.php?branch_id=<?=$branch_row['branch_id']?>"> <i
                                    class="fa-solid fa-pen-to-square"></i></a>
                            <a class="btn btn-sm btn-danger"
                                href="../components/delete_sw_branch.php?branch_id=<?=$branch_row['branch_id']?>"
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