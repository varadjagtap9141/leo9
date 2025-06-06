<?php
include "../master/connection.php";

extract($_POST);
$query="INSERT INTO services(service_title,service_subtitle) values('$service_title', '$service_subtitle')";
$result=mysqli_query($conn, $query);
header("Location:../master/manage_service.php");
?>