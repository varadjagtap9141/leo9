<?php
include "navbar.php";
extract($_GET);
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
                    JOIN roles ON user.role_id = roles.role_id WHERE user_id='$user_id'";
                    $result=mysqli_query($conn,$query);
                    $user_row=mysqli_fetch_assoc($result);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="row g-0 align-items-stretch"  style="min-height: 100%;">
                <div class="col-md-4 p-3 d-flex align-items-stretch">
                    <img src="../components/uploads/<?=$user_row['profile']?>"
                        class="img-fluid rounded-start w-100 h-100 object-fit-cover" style="object-fit: cover;"
                        alt="Profile Image">
                </div>
                <div class="col-md-8 d-flex align-items-stretch">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <h5 class="card-title"><b>User Name :</b> <?=$user_row['user_name']?></h5>
                        <h5 class="card-title"><b>Email :</b> <?=$user_row['email']?></h5>
                        <h5 class="card-title"><b>Contact No :</b> <?=$user_row['phone_no']?></h5>
                        <h5 class="card-title"><b>Branch Name :</b> <?=$user_row['branch_name']?></h5>
                        <h5 class="card-title"><b>Role :</b> <?=$user_row['role']?></h5>
                        <h5 class="card-title">
                            <b>Status :</b>
                            <?php if($user_row['status'] == 'active'): ?>
                            <span class="badge bg-success"><?=$user_row['status']?></span>
                            <?php else: ?>
                            <span class="badge bg-danger"><?=$user_row['status']?></span>
                            <?php endif; ?>
                        </h5>
                        <h5 class="card-title"><b>Created At :</b> <?=$user_row['created_at']?></h5>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php
include "footer.php";
?>