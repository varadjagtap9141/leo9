<?php
include "navbar.php";
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-body">
            <h5>Manage Slider</h5>
            <hr />
            <form action="../components/save_slider.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-2">
                            <label for="slider_title">Slider Title</label>
                            <input type="text" class="form-control" id="slider_title" name="slider_title" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-2">
                            <label for="slider_img">Slider Image</label>
                            <input type="file" class="form-control" id="slider_img" name="slider_img" required>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary float-end mt-3">Add Slider</button>
            </form>
        </div>
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-12">
        <div class="card card-body table-responsive">
            <h5>Slider List</h5>
            <table class="table table-bordered table-hover text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Slider Title</th>
                        <th>Slider Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query="SELECT * FROM slider";
                    $result=mysqli_query($conn,$query);
                    foreach($result as $key=>$row)
                    {
                        ?>
                    <tr>
                        <td><?=$key+1?></td>
                        <td><?=$row['slider_title']?></td>
                        <td><img width="auto" height="80" src="../components/uploads/<?=$row['slider_img']?>" alt="">
                        </td>
                        <td class="d-flex justify-content-center gap-2">
                            <a href="edit_slider.php?slider_id=<?=$row['slider_id']?>" class="btn btn-sm mt-4 btn-primary"><i
                                    class="fa-solid fa-pen-to-square"></i></a>
                            <a href="../components/delete_slider.php?slider_id=<?=$row['slider_id']?>"
                                class="btn btn-sm mt-4 btn-danger"><i class="fa-solid fa-trash"></i></a>
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