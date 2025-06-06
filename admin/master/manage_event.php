<?php
include "navbar.php";
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-body">
            <h5>Add Events</h5>
            <hr />
            <form action="../components/save_event.php" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-2">
                            <label for="event_title">Event Name</label>
                            <input type="text" class="form-control" id="event_title" name="event_title" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-2">
                            <label for="yt_link">Event Link</label>
                            <input type="url" class="form-control" id="yt_link" name="yt_link"
                                placeholder="Enter YouTube Link" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group mb-2">
                            <label for="event_desc">Event Description</label>
                            <textarea class="form-control" name="event_desc" id=""></textarea>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary float-end mt-3">Add Event</button>
            </form>
        </div>
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-12">
        <div class="card card-body table-responsive">
            <h5>Event List</h5>
            <table class="table table-bordered table-hover text-center">
                <thead>
                    <tr>
                        <th>Srno</th>
                        <th>Event Title</th>
                        <th>Description</th>
                        <th>YouTube Link</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "connection.php";
                    $query="SELECT * FROM events";
                    $result=mysqli_query($conn,$query);
                    foreach($result as $key=>$event_row)
                    {
                        ?>
                    <tr>
                        <td><?=$key+1?></td>
                        <td><?=$event_row['event_title']?></td>
                        <td><?=$event_row['event_desc']?></td>
                        <td><a href="<?=$event_row['yt_link']?>">Click Here</a></td>
                        <td class="d-flex justify-content-center gap-2">
                            <a class="btn btn-sm btn-primary"
                                href="edit_event.php?event_id=<?=$event_row['event_id']?>"> <i
                                    class="fa-solid fa-pen-to-square"></i></a>
                            <a class="btn btn-sm btn-danger"
                                href="../components/delete_event.php?event_id=<?=$event_row['event_id']?>"
                                onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash"></i></a>
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