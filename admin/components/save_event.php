<?php
include "../master/connection.php";
 extract($_POST);
 $query="INSERT INTO events(event_title, event_desc,yt_link) VALUES('$event_title', '$event_desc', '$yt_link')";
 $result=mysqli_query($conn, $query);
 header("Location:../master/manage_event.php");
?>