<?php
include "navbar.php";
?>
<div class="row g-3">
    <div class="col-md-12">
        <button class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#modalCenter">Add
            Client</button>
    </div>
</div>
<div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Manage Client</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="../components/sw_save_client.php" method="POST" enctype="multipart/form-data">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="client_name">Client Name</label>
                                <input type="text" class="form-control" id="client_name" name="client_name"
                                    placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="gst_no">GST Number</label>
                                <input type="text" class="form-control" id="gst_no" name="gst_no" placeholder=""
                                    required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder=""
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
                                <label for="state">State</label>
                                <select class="form-select" name="state" id="state" required>
                                    <option value="">Select State</option>
                                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                    <option value="Assam">Assam</option>
                                    <option value="Bihar">Bihar</option>
                                    <option value="Chandigrah">Chandigrah</option>
                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                    <option value="Dadar & Nagar Haveli">Dadar & Nagar Haveli</option>
                                    <option value="Daman & Diu">Daman & Diu</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <!-- <option value="">Goa</option>
                                    <option value="">Gujarat</option>
                                    <option value="">Haryana</option>
                                    <option value="">Himachal Pradesh</option>
                                    <option value="">Jammu & Kashmir</option>
                                    <option value="">Jharkhand</option> -->
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="pincode">Pincode</label>
                                <input type="number" class="form-control" id="pincode" name="pincode" placeholder=""
                                    required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-select" name="status" id="status" required>
                                    <option value="">Select Status</option>
                                    <option value="Active">Active</option>
                                    <option value="Unactive">Unactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="contact_no">Contact No</label>
                                <input type="number" class="form-control" id="contact_no" name="contact_no"
                                    placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="alt_contact_no">Alt Contact No</label>
                                <input type="text" class="form-control" id="alt_contact_no" name="alt_contact_no"
                                    placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="website">Website</label>
                                <input type="url" class="form-control" id="website" name="website" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="pan_no">PAN No</label>
                                <input type="text" class="form-control" id="pan_no" name="pan_no" placeholder=""
                                    required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tan_no">TAN No</label>
                                <input type="text" class="form-control" id="tan_no" name="tan_no" placeholder=""
                                    required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="bank_name">Bank Name</label>
                                <input type="text" class="form-control" id="bank_name" name="bank_name" placeholder=""
                                    required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="bank_acc_no">Bank Account</label>
                                <input type="number" class="form-control" id="bank_acc_no" name="bank_acc_no"
                                    placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="bank_address">Bank Address</label>
                                <input type="text" class="form-control" id="bank_address" name="bank_address"
                                    placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="ifsc_code">IFSC Code</label>
                                <input type="text" class="form-control" id="ifsc_code" name="ifsc_code" placeholder=""
                                    required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="district">District</label>
                                <input type="text" class="form-control" id="district" name="district" placeholder=""
                                    required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="pan">Upload PAN Card</label>
                                <input type="file" class="form-control" id="pan" name="pan" placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="adhar">Upload Adhar Card</label>
                                <input type="file" class="form-control" id="adhar" name="adhar" placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="passbook">Upload Passbook Front page/Cancelled Check</label>
                                <input type="file" class="form-control" id="passbook" name="passbook" placeholder=""
                                    required>
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
        <div class="card card-body table-responsive">
            <h5>Client List</h5>
            <table class="table table-bordered text-center table-hover">
                <thead>
                    <tr>
                        <th>Srno</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    extract($_GET);
                    $query="SELECT * FROM clients";
                    $result=mysqli_query($conn, $query);
                    foreach($result as $key=>$client_row)
                    {
                        ?>
                    <tr>
                        <td><?=$key+1?></td>
                        <td><?=$client_row['client_name']?></td>
                        <td><?=$client_row['contact_no']?></td>
                        <td class="d-flex justify-content-center gap-2">
                            <a class="btn btn-sm btn-secondary"
                                href="view_client.php?client_id=<?=$client_row['client_id']?>"> <i
                                    class="fa-solid fa-eye"></i></a>
                            <a class="btn btn-sm btn-primary"
                                href="edit_sw_client.php?client_id=<?=$client_row['client_id']?>"> <i
                                    class="fa-solid fa-pen-to-square"></i></a>
                            <a class="btn btn-sm btn-danger"
                                href="../components/delete_sw_client.php?client_id=<?=$client_row['client_id']?>"
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