<?php
include "navbar.php";
extract($_GET);
$query="SELECT * FROM slider WHERE slider_id='$slider_id'";
$result=mysqli_query($conn, $query);
$slider_row=mysqli_fetch_assoc($result);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-body">
            <h5>Manage Slider</h5>
            <hr />
            <form action="../components/update_slider.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <input type="hidden" name="slider_id" value="<?=$slider_row['slider_id']?>">
                        <div class="d-flex justify-content-center">
                            <img class="d-flex align-item-center img-fluid" src="../components/uploads/<?=$slider_row['slider_img']?>" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-2">
                            <label for="slider_title">Slider Title</label>
                            <input type="text" class="form-control" id="slider_title" value="<?=$slider_row['slider_title']?>" name="slider_title" required>
                        </div>
                        <div class="form-group mb-2">
                            <label for="slider_img">Slider Image</label>
                            <input type="file" class="form-control" id="slider_img" name="slider_img">
                        </div>
                    </div>
                </div>
                <button onClick="return confirm('Are You Sure?')" class="btn btn-primary float-end mt-3">Update Slider</button>
            </form>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>