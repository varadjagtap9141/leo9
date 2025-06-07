<?php
include "../master/connection.php";
extract($_GET);
$query="DELETE FROM events WHERE event_id=$event_id";
$result=mysqli_query($conn, $query);
header("location:../master/manage_event.php");
?>