<?php
include "navbar.php";
extract($_GET);
$query="SELECT * FROM vendors WHERE vendor_id='$vendor_id'";
$result=mysqli_query($conn, $query);
$vendor_row=mysqli_fetch_assoc($result);
$current_vendor_type_id = $vendor_row['vendor_type_id'];

// Fetch vendor types
$type_query="SELECT * FROM vendors_type";
$result=mysqli_query($conn, $type_query);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-body">
            <h5>Manage Vendor</h5>
            <div class="row g-3">
                <form action="../components/sw_update_vendor.php" method="POST" enctype="multipart/form-data">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="hidden" name="vendor_id" value="<?=$vendor_row['vendor_id']; ?>">
                                <label for="vendor_name">Vendor Name</label>
                                <input type="text" class="form-control" id="vendor_name" name="vendor_name"
                                    placeholder="" value="<?=$vendor_row['vendor_name']?>" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="address">Vendor Address</label>
                                <textarea class="form-control" name="address"
                                    id=""><?=$vendor_row['address']?></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="type">Vendor Type</label>
                                <select class="form-select searchable-select" id="type" name="vendor_type_id" required>
                                    <option value="" disabled <?= empty($current_vendor_type_id) ? 'selected' : '' ?>>
                                        Select Type</option>
                                    <?php
                                    while($vendor_types_row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <option value="<?=$vendor_types_row['vendor_type_id']?>"
                                        <?=($vendor_types_row['vendor_type_id'] == $current_vendor_type_id) ? 'selected' : ''?>>
                                        <?=$vendor_types_row['vendor_type']?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="gst_pan">GST/PAN No</label>
                                <input type="text" class="form-control" id="gst_pan" name="gst_pan" placeholder=""
                                    value="<?=$vendor_row['gst_pan']?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone_no">Contact No</label>
                                <input type="number" class="form-control" id="phone_no" name="phone_no" placeholder=""
                                    value="<?=$vendor_row['phone_no']?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Vendor Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder=""
                                    value="<?=$vendor_row['email']?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" class="form-control" id="city" name="city" placeholder=""
                                    value="<?=$vendor_row['city']?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="district">District</label>
                                <input type="text" class="form-control" id="district" name="district" placeholder=""
                                    value="<?=$vendor_row['district']?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="state">State</label>
                                <input type="state" class="form-control" id="state" name="state" placeholder=""
                                    value="<?=$vendor_row['state']?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="pincode">Pincode</label>
                                <input type="number" class="form-control" id="pincode" name="pincode" placeholder=""
                                    value="<?=$vendor_row['pincode']?>" required>
                            </div>
                        </div>
                        <h5>Bank Details</h5>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="bank_name">Bank Name</label>
                                <input type="text" class="form-control" id="bank_name" name="bank_name" placeholder=""
                                    value="<?=$vendor_row['bank_name']?>" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="bank_address">Bank Address</label>
                                <textarea class="form-control" name="bank_address" id="bank_address"
                                    oninput="validateMarathiAddress(this)"><?=$vendor_row['bank_address']?></textarea>
                                <small id="addressWarning" class="text-danger d-none">Commas (,) not allowed.</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="acc_no">Bank Account No</label>
                                <input type="number" class="form-control" id="acc_no" name="acc_no" placeholder=""
                                    value="<?=$vendor_row['acc_no']?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="ifsc">IFSC code</label>
                                <input type="text" class="form-control" id="ifsc" name="ifsc" placeholder=""
                                    value="<?=$vendor_row['ifsc']?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-select" id="status" name="status" required>
                                    <option value="">Select Status</option>
                                    <option value="active" <?=($vendor_row['status']=='active') ? 'selected' : ''?>>
                                        Active</option>
                                    <option value="inactive" <?=($vendor_row['status']=='inactive') ? 'selected' : ''?>>
                                        Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="passbook">Passbook Front Page/Cancelled Check</label>
                                <input type="file" class="form-control" id="passbook" name="passbook" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <img class="w-50 h-100" src="../components/uploads/<?=$vendor_row['passbook']?>" alt="">
                        </div>
                    </div>
                    <button onClick="return confirm('Are You Sure?')" class="btn btn-primary mt-3 float-end">Update
                        Vendor</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>