<?php
include "navbar.php";
extract($_GET);
$query="SELECT * FROM branches WHERE branch_id=$branch_id";
$result=mysqli_query($conn, $query);
$branch_row=mysqli_fetch_assoc($result);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-body">
            <h5>Branch Information
                <a href="sw_manage_branch.php"
                    class="btn btn-primary btn-sm float-end"><i class="fa-solid fa-arrow-left"></i></a>
            </h5>
            <table class="table text-center table-bordered">
                <tr>
                    <th>Branch Name</th>
                    <td><?=$branch_row['branch_name'];?></td>
                </tr>
                <tr>
                    <th>Contact No</th>
                    <td><?=$branch_row['phone_no'];?></td>
                </tr>
                <tr>
                    <th>City</th>
                    <td><?=$branch_row['city'];?></td>
                </tr>
                <tr>
                    <th>District</th>
                    <td><?=$branch_row['district'];?></td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td><?=$branch_row['address'];?></td>
                </tr>
                <tr>
                    <th>Pincode</th>
                    <td><?=$branch_row['pincode'];?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?=$branch_row['email'];?></td>
                </tr>
                <tr>
                    <th>Status</th>
                    <?php
                    if($branch_row['status']=='active')
                    {
                    ?>
                    <td><span class="badge rounded-pill bg-success"><?=$branch_row['status']?></span></td>
                    <?php
                    }
                    ?>
                    <?php
                    if($branch_row['status']=='unactive')
                    {
                    ?>
                    <td><span class="badge rounded-pill bg-danger"><?=$branch_row['status']?></span></td>
                    <?php
                    }
                    ?>
                </tr>
                <tr>
                    <th>Created At</th>
                    <td><mark><?=$branch_row['created_at'];?></mark></td>
                </tr>
            </table>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>