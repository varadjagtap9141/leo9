<?php
include "navbar.php";
extract($_GET);
$query="SELECT * FROM vendors JOIN vendors_type ON vendors.vendor_type_id=vendors_type.vendor_type_id WHERE vendor_id='$vendor_id'";
$result=mysqli_query($conn, $query);
$vendor_row=mysqli_fetch_assoc($result);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-body">
            <h5>Vendor Information
                 <a href="sw_manage_vendor.php"
                    class="btn btn-primary btn-sm float-end"><i class="fa-solid fa-arrow-left"></i></a>
            </h5>
            <table class="table table-bordered text-center">
                <tr>
                    <th>Vendor Name</th>
                    <td><?php echo $vendor_row['vendor_name']; ?></td>
                </tr>
                <tr>
                    <th>Vendor Type</th>
                    <td>
                        <?=$vendor_row['vendor_type']?>
                    </td>
                </tr>
                <tr>
                    <th>Vendor Address</th>
                    <td><?php echo $vendor_row['address']; ?></td>
                </tr>
                <tr>
                    <th>GST/PAN No</th>
                    <td><?php echo $vendor_row['gst_pan']; ?></td>
                </tr>
                <tr>
                    <th>Contact No</th>
                    <td><?php echo $vendor_row['phone_no']; ?></td>
                </tr>
                 <tr>
                    <th>Vendor Email</th>
                    <td><?php echo $vendor_row['email']; ?></td>
                </tr>
                 <tr>
                    <th>Contact No</th>
                    <td><?php echo $vendor_row['city']; ?></td>
                </tr>
                 <tr>
                    <th>Contact No</th>
                    <td><?php echo $vendor_row['district']; ?></td>
                </tr>
                 <tr>
                    <th>Contact No</th>
                    <td><?php echo $vendor_row['state']; ?></td>
                </tr>
                <tr>
                    <th>Contact No</th>
                    <td><?php echo $vendor_row['pincode']; ?></td>
                </tr>
                <tr>
                    <th>Status</th>
                    <?php
                    if($vendor_row['status']=='active')
                    {
                        ?>
                        <td><span class="badge rounded-pill bg-success"><?=$vendor_row['status']?></span></td>
                        <?php
                    }
                    ?>
                    <?php
                    if($vendor_row['status']=='inactive')
                    {
                        ?>
                        <td><span class="badge rounded-pill bg-danger"><?=$vendor_row['status']?></span></td>
                        <?php
                    }
                    ?>
                </tr>
            </table>
            <h5 class="mt-4">Vendor Bank Details</h5>
            <table class="table table-bordered text-center">
                <tr>
                    <th>Vendor Name</th>
                    <td><?php echo $vendor_row['bank_name']; ?></td>
                </tr>
                <tr>
                    <th>Vendor Address</th>
                    <td><?php echo $vendor_row['acc_no']; ?></td>
                </tr>
                <tr>
                    <th>GST/PAN No</th>
                    <td><?php echo $vendor_row['ifsc']; ?></td>
                </tr>
                <tr>
                    <th>Contact No</th>
                    <td><?php echo $vendor_row['bank_address']; ?></td>
                </tr>
                 <tr>
                    <th>Vendor Email</th>
                    <td><?php echo $vendor_row['email']; ?></td>
                </tr>
                 <tr>
                    <th>Passbok/Cancelled Check Front Page</th>
                    <td><img width="220" height="auto" src="../components/uploads/<?=$vendor_row['passbook']?>" alt=""></td>
                </tr>
            </table>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>
