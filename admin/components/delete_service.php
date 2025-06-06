<?php
include "../master/connection.php";
extract($_GET);
$query="DELETE FROM serviceS WHERE service_id=$service_id";
$result=mysqli_query($conn, $query);
header("location:../master/manage_service.php");
?>