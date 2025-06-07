<?php
include "../master/connection.php";
extract($_GET);
$query="DELETE FROM client_slider WHERE client_id=$client_id";
$result=mysqli_query($conn, $query);
header("location:../master/manage_client.php");
?>