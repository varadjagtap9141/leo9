<?php
include "../master/connection.php";
extract($_POST);
$query="UPDATE events SET event_title='$event_title', event_desc='$event_desc', yt_link='$yt_link' WHERE event_id=$event_id";
$result=mysqli_query($conn, $query);
header("Location:../master/manage_event.php");
?>