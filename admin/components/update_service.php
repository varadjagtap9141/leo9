<?php
include "../master/connection.php";
extract($_POST);
$query="UPDATE services SET service_title='$service_title', service_subtitle='$service_subtitle' WHERE service_id=$service_id";
$result=mysqli_query($conn, $query);
header("Location:../master/manage_service.php");
?>