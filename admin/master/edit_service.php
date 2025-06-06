<?php
include "connection.php";
include "navbar.php";
extract($_GET);
$query="SELECT * FROM services WHERE service_id=$service_id";
$result=mysqli_query($conn,$query);
$service_row=mysqli_fetch_assoc($result);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-body">
            <h5>Add Services</h5>
            <hr />
            <form action="../components/update_service.php" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <input type="hidden" name="service_id" value="<?=$service_row['service_id']?>">
                        <div class="form-group mb-2">
                            <label for="service_title">Service Title</label>
                            <input type="text" class="form-control" id="service_title" name="service_title"
                                value="<?=$service_row['service_title']?>" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-2">
                            <label for="service_subtitle">Service Title</label>
                            <input type="text" class="form-control" id="service_subtitle" name="service_subtitle"
                                value="<?=$service_row['service_subtitle']?>" required>
                        </div>
                    </div>
                </div>
                <button onClick="return confirm('Are You Sure?')" class="btn btn-primary float-end mt-3">Update Service</button>
            </form>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>