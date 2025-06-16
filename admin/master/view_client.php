<?php
include "navbar.php";
extract($_GET);
$query="SELECT * FROM clients WHERE client_id=$client_id";
$result=mysqli_query($conn, $query);
$client_row=mysqli_fetch_assoc($result);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-body table-responsive">
            <h5>Client Basic Information
                <a href="sw_manage_client.php"
                    class="btn btn-primary btn-sm float-end"><i class="fa-solid fa-arrow-left"></i></a>
            </h5>
            <table class="table text-center table-bordered">
                <tr>
                    <th>Client Name</th>
                    <td><?=$client_row['client_name']?></td>
                </tr>
                <tr>
                    <th>GST No</th>
                    <td><?=$client_row['gst_no']?></td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td><?=$client_row['address']?></td>
                </tr>
                <tr>
                    <th>City</th>
                    <td><?=$client_row['city']?></td>
                </tr>
                <tr>
                    <th>State</th>
                    <td><?=$client_row['state']?></td>
                </tr>
                <tr>
                    <th>Pincode</th>
                    <td><?=$client_row['pincode']?></td>
                </tr>
                <tr>
                    <th>Status</th>
                    <?php
                    if($client_row['status']=='Active')
                    {
                        ?>
                        <td><span class="badge rounded-pill bg-success"><?=$client_row['status']?></span></td>
                        <?php
                    }
                    ?>
                    <?php
                    if($client_row['status']=='Unactive')
                    {
                        ?>
                        <td><span class="badge rounded-pill bg-danger"><?=$client_row['status']?></span></td>
                        <?php
                    }
                    ?>
                </tr>
                <tr>
                    <th>Contact No</th>
                    <td><?=$client_row['contact_no']?></td>
                </tr>
                <tr>
                    <th>Alt Contact No</th>
                    <td><?=$client_row['alt_contact_no']?></td>
                </tr>
                <tr>
                    <th>Website</th>
                    <td><a href="<?=$client_row['website']?>"><?=$client_row['website']?></a></td>
                </tr>
                <tr>
                    <th>PAN No</th>
                    <td><?=$client_row['pan_no']?></td>
                </tr>
                <tr>
                    <th>TAN No</th>
                    <td><?=$client_row['tan_no']?></td>
                </tr>
            </table>

            <h5 class="mt-4">Bank Details</h5>
            <table class="table text-center table-bordered">
                <tr>
                    <th>Bank Name</th>
                    <td><?=$client_row['bank_name']?></td>
                </tr>
                <tr>
                    <th>Bank Acc No</th>
                    <td><?=$client_row['bank_acc_no']?></td>
                </tr>
                <tr>
                    <th>Account No</th>
                    <td><?=$client_row['bank_address']?></td>
                </tr>
                <tr>
                    <th>IFSC Code</th>
                    <td><?=$client_row['ifsc_code']?></td>
                </tr>
                <tr>
                    <th>District</th>
                    <td><?=$client_row['district']?></td>
                </tr>
                 <tr>
                    <th>Passbok/Check Front Page</th>
                    <td><img width="220" height="auto" src="../components/uploads/<?=$client_row['passbook']?>" alt=""></td>
                </tr>
                <tr>
                    <th>PAN</th>
                    <td><img width="220" height="auto" src="../components/uploads/<?=$client_row['pan']?>" alt=""></td>
                </tr>
                <tr>
                    <th>Adhar</th>
                    <td><img width="220" height="auto" src="../components/uploads/<?=$client_row['adhar']?>" alt=""></td>
                </tr>
            </table>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>