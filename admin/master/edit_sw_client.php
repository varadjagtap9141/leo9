<?php
include "navbar.php";
extract($_GET);
$query="SELECT * FROM clients WHERE client_id=$client_id";
$result=mysqli_query($conn, $query);
$client_row=mysqli_fetch_assoc($result);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-body">
            <h5>Manage Client</h5>
            <form action="../components/sw_update_client.php" method="POST" enctype="multipart/form-data">
                <div class="row g-3">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="hidden" name="client_id" value="<?=$client_row['client_id']?>">
                            <label for="client_name">Client Name</label>
                            <input type="text" class="form-control" id="client_name" name="client_name" placeholder=""
                                value="<?=$client_row['client_name']?>" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="gst_no">GST Number</label>
                            <input type="text" class="form-control" id="gst_no" name="gst_no" placeholder="" value="<?=$client_row['gst_no']?>" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="" value="<?=$client_row['address']?>" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" name="city" placeholder="" value="<?=$client_row['city']?>" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="state">State</label>
                            <select class="form-select" name="state" id="state" required>
                                <option value="">Select State</option>
                                <option value="Andaman and Nicobar Islands"
                                    <?= ($client_row['state'] == 'Andaman and Nicobar Islands') ? 'selected' : '' ?>>
                                    Andaman and Nicobar Islands</option>
                                <option value="Andhra Pradesh"
                                    <?= ($client_row['state'] == 'Andhra Pradesh') ? 'selected' : '' ?>>Andhra Pradesh
                                </option>
                                <option value="Arunachal Pradesh"
                                    <?= ($client_row['state'] == 'Arunachal Pradesh') ? 'selected' : '' ?>>Arunachal
                                    Pradesh</option>
                                <option value="Assam" <?= ($client_row['state'] == 'Assam') ? 'selected' : '' ?>>Assam
                                </option>
                                <option value="Bihar" <?= ($client_row['state'] == 'Bihar') ? 'selected' : '' ?>>Bihar
                                </option>
                                <option value="Chandigrah"
                                    <?= ($client_row['state'] == 'Chandigrah') ? 'selected' : '' ?>>Chandigrah</option>
                                <option value="Chhattisgarh"
                                    <?= ($client_row['state'] == 'Chhattisgarh') ? 'selected' : '' ?>>Chhattisgarh
                                </option>
                                <option value="Dadar & Nagar Haveli"
                                    <?= ($client_row['state'] == 'Dadar & Nagar Haveli') ? 'selected' : '' ?>>Dadar &
                                    Nagar Haveli</option>
                                <option value="Daman & Diu"
                                    <?= ($client_row['state'] == 'Daman & Diu') ? 'selected' : '' ?>>Daman & Diu
                                </option>
                                <option value="Delhi" <?= ($client_row['state'] == 'Delhi') ? 'selected' : '' ?>>Delhi
                                </option>
                                <option value="Maharashtra" <?= ($client_row['state'] == 'Maharashtra') ? 'selected' : '' ?>>Maharashtra
                                </option>
                                <option value="Gujarat" <?= ($client_row['state'] == 'Gujarat') ? 'selected' : '' ?>>
                                    Gujarat</option>
                                <option value="Haryana" <?= ($client_row['state'] == 'Haryana') ? 'selected' : '' ?>>
                                    Haryana</option>
                                <option value="Himachal Pradesh"
                                    <?= ($client_row['state'] == 'Himachal Pradesh') ? 'selected' : '' ?>>Himachal
                                    Pradesh</option>
                                <option value="Jammu & Kashmir"
                                    <?= ($client_row['state'] == 'Jammu & Kashmir') ? 'selected' : '' ?>>Jammu & Kashmir
                                </option>
                                <option value="Jharkhand"
                                    <?= ($client_row['state'] == 'Jharkhand') ? 'selected' : '' ?>>Jharkhand</option>
                            </select>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="pincode">Pincode</label>
                            <input type="number" class="form-control" id="pincode" name="pincode" placeholder=""
                              value="<?=$client_row['pincode']?>"  required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-select" name="status" id="status" required>
                                <option value="">Select Status</option>
                                <option value="Active" <?=($client_row['status']=='Active') ? 'selected' : ''?>>Active</option>
                                <option value="Unactive" <?=($client_row['status']=='Unactive') ? 'selected' : ''?>>Unactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="contact_no">Contact No</label>
                            <input type="number" class="form-control" id="contact_no" name="contact_no" placeholder=""
                             value="<?=$client_row['contact_no']?>" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="alt_contact_no">Alt Contact No</label>
                            <input type="text" class="form-control" id="alt_contact_no" name="alt_contact_no"
                                placeholder="" value="<?=$client_row['alt_contact_no']?>" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="website">Website</label>
                            <input type="text" class="form-control" id="website" name="website" value="<?=$client_row['website']?>" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="pan_no">PAN No</label>
                            <input type="text" class="form-control" id="pan_no" name="pan_no" placeholder="" value="<?=$client_row['pan_no']?>" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tan_no">TAN No</label>
                            <input type="text" class="form-control" id="tan_no" name="tan_no" placeholder="" value="<?=$client_row['tan_no']?>" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="bank_name">Bank Name</label>
                            <input type="text" class="form-control" id="bank_name" name="bank_name" placeholder=""
                             value="<?=$client_row['bank_name']?>"   required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="bank_acc_no">Bank Account</label>
                            <input type="number" class="form-control" id="bank_acc_no" name="bank_acc_no" placeholder=""
                             value="<?=$client_row['bank_acc_no']?>"   required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="bank_address">Bank Address</label>
                            <input type="text" class="form-control" id="bank_address" name="bank_address" placeholder=""
                            value="<?=$client_row['bank_address']?>"    required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ifsc_code">IFSC Code</label>
                            <input type="text" class="form-control" id="ifsc_code" name="ifsc_code" placeholder=""
                             value="<?=$client_row['ifsc_code']?>"   required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="district">District</label>
                            <input type="text" class="form-control" id="district" name="district" placeholder=""
                            value="<?=$client_row['district']?>"    required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="pan">Upload PAN Card</label>
                            <input type="file" class="form-control" id="pan" name="pan" placeholder="">
                            <img class="img-fluid mt-3" src="../components/uploads/<?=$client_row['pan']?>" alt="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="adhar">Upload Adhar Card</label>
                            <input type="file" class="form-control" id="adhar" name="adhar" placeholder="">
                            <img class="img-fluid mt-3" src="../components/uploads/<?=$client_row['adhar']?>" alt="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="passbook">Upload Passbook Front page/Cancelled Check</label>
                            <input type="file" class="form-control" id="passbook" name="passbook" placeholder="">
                            <img class="img-fluid mt-3" src="../components/uploads/<?=$client_row['passbook']?>" alt="">
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