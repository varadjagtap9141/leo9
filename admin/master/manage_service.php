<?php
include "navbar.php";
include "connection.php";
?>
<div class="row g-3">
    <div class="col-md-12">
        <button class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#modalCenter">Add
            Service</button>
    </div>
</div>
<div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Manage Services</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <form action="../components/save_service.php" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-2">
                            <label for="service_title">Service Title</label>
                            <input type="text" class="form-control" id="service_title" name="service_title" required>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="form-group mb-2">
                            <label for="service_subtitle">Service Title</label>
                            <input type="text" class="form-control" id="service_subtitle" name="service_subtitle" required>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary float-end mt-3">Add Service</button>
            </form>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-12">
        <div class="card card-body table-responsive">
            <h5>Service List</h5>
            <table class="table table-bordered table-hover text-center">
                <thead>
                    <tr>
                        <th>Srno</th>
                        <th>Title</th>
                        <th>Subtitle</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query="SELECT * FROM services";
                    $result=mysqli_query($conn, $query);
                    foreach($result as $key=>$row)
                    {
                        ?>
                        <tr>
                            <td><?=$key+1?></td>
                            <td><?=$row['service_title']?></td>
                            <td><?=$row['service_subtitle']?></td>
                            <td class="d-flex justify-content-center gap-2">
                                <a href="edit_service.php?service_id=<?=$row['service_id']?>" class="btn btn-sm btn-primary">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <a onClick="return confirm('Are You Sure?')" href="../components/delete_service.php?service_id=<?=$row['service_id']?>" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a>
                            </td>
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