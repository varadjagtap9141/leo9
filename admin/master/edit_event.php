<?php
include "navbar.php";
include "connection.php";
extract($_GET);
$query="SELECT * FROM events where event_id=$event_id";
$result=mysqli_query($conn, $query);
$event_row=mysqli_fetch_assoc($result);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-body">
            <h5>Add Events</h5>
            <hr />
            <form action="../components/update_event.php" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <input type="hidden" name="event_id" value="<?=$event_row['event_id']?>">
                        <div class="form-group mb-2">
                            <label for="event_title">Event Name</label>
                            <input type="text" class="form-control" id="event_title" name="event_title" value="<?=$event_row['event_title']?>" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-2">
                            <label for="yt_link">Event Link</label>
                            <input type="url" class="form-control" id="yt_link" name="yt_link"
                                placeholder="Enter YouTube Link" value="<?=$event_row['yt_link']?>" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group mb-2">
                            <label for="event_desc">Event Description</label>
                            <textarea class="form-control" name="event_desc" id="" required><?=$event_row['event_desc']?></textarea>
                        </div>
                    </div>
                </div>
                <button onClick="return confirm('Are You Sure?')" class="btn btn-primary float-end mt-3">Update Event</button>
            </form>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>