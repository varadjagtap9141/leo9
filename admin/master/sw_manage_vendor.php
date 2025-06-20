<?php
include "navbar.php";
?>
<div class="row g-3">
    <div class="col-md-12">
        <button class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#modalCenter">Add
            Vendor</button>
    </div>
</div>
<div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Manage Vendor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="../components/sw_save_vendor.php" method="POST" enctype="multipart/form-data">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="vendor_name">Vendor Name</label>
                                <input type="text" class="form-control" id="vendor_name" name="vendor_name"
                                    placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="address">Vendor Address</label>
                                <textarea class="form-control" name="address" id=""></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="type">Vendor Type</label>
                                <select class="form-select" id="type" name="vendor_type_id" required>
                                    <option value="">Select Type</option>
                                    <?php
                                    $query="SELECT * FROM vendors_type";
                                    $result=mysqli_query($conn, $query);
                                    while($vendor_type_row=mysqli_fetch_assoc($result))
                                    {
                                       ?>
                                    <option value="<?=$vendor_type_row['vendor_type_id']?>">
                                        <?=$vendor_type_row['vendor_type']?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="gst_pan">GST/PAN No</label>
                                <input type="text" class="form-control" id="gst_pan" name="gst_pan" placeholder=""
                                    required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone_no">Contact No</label>
                                <input type="number" class="form-control" id="phone_no" name="phone_no" placeholder=""
                                    required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Vendor Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder=""
                                    required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" class="form-control" id="city" name="city" placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="district">District</label>
                                <input type="text" class="form-control" id="district" name="district" placeholder=""
                                    required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="state">State</label>
                                <input type="state" class="form-control" id="state" name="state" placeholder=""
                                    required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="pincode">Pincode</label>
                                <input type="number" class="form-control" id="pincode" name="pincode" placeholder=""
                                    required>
                            </div>
                        </div>
                        <h5>Bank Details</h5>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="bank_name">Bank Name</label>
                                <input type="text" class="form-control" id="bank_name" name="bank_name" placeholder=""
                                    required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="bank_address">Bank Address</label>
                                <textarea class="form-control" name="bank_address" id="bank_address"
                                    oninput="validateMarathiAddress(this)"></textarea>
                                <small id="addressWarning" class="text-danger d-none">Commas (,) not allowed.</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="acc_no">Bank Account No</label>
                                <input type="number" class="form-control" id="acc_no" name="acc_no" placeholder=""
                                    required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="ifsc">IFSC code</label>
                                <input type="text" class="form-control" id="ifsc" name="ifsc" placeholder="" required>
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
                                <label for="passbook">Passbook Front Page/Cancelled Check</label>
                                <input type="file" class="form-control" id="passbook" name="passbook" placeholder=""
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
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="mb-0">Vendor List</h5>
                <div class="d-flex gap-2">
                    <a href="sw_manage_vendor.php" class="btn btn-secondary btn-sm d-flex align-items-center">
                        <i class="fa-solid fa-rotate-right"></i>
                    </a>
                    <form action="sw_manage_vendor.php" method="GET" class="d-flex">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" placeholder="Search" name="search">
                            <button class="btn btn-primary" type="submit">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <table class="table table-bordered table-hover text-center">
                <thead>
                    <tr>
                        <th>Sr No</th>
                        <th>Vendor Name</th>
                        <th>Contact No</th>
                        <th>Vendor Type</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
        extract($_GET);
        if (isset($_GET['search'])) {
            $name = $_GET['search'];
            $query = "SELECT * FROM vendors JOIN vendors_type ON vendors.vendor_type_id = vendors_type.vendor_type_id WHERE vendor_name LIKE '%$name%'";
        } else {
            $query = "SELECT * FROM vendors JOIN vendors_type ON vendors.vendor_type_id = vendors_type.vendor_type_id";
        }

        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            foreach ($result as $key => $vendor_row) {
        ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= $vendor_row['vendor_name'] ?></td>
                        <td><?= $vendor_row['phone_no'] ?></td>
                        <td><?= $vendor_row['vendor_type'] ?></td>
                        <td class="d-flex justify-content-center gap-2">
                            <a class="btn btn-sm btn-secondary"
                                href="view_vendor.php?vendor_id=<?= $vendor_row['vendor_id'] ?>">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <a class="btn btn-sm btn-primary"
                                href="edit_sw_vendor.php?vendor_id=<?= $vendor_row['vendor_id'] ?>">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <a class="btn btn-sm btn-danger"
                                href="../components/delete_sw_vendor.php?vendor_id=<?= $vendor_row['vendor_id'] ?>"
                                onclick="return confirm('Are you sure?')">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php
            }
        } else {
            echo "<tr><td colspan='5'>No record found</td></tr>";
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
<script>
function validateMarathiAddress(textarea) {
    const warning = document.getElementById('addressWarning');
    if (textarea.value.includes(',')) {
        warning.classList.remove('d-none');
    } else {
        warning.classList.add('d-none');
    }
}
</script>