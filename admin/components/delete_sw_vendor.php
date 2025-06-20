<?php
include "../master/connection.php";
extract($_GET);
$query = "DELETE FROM vendors WHERE vendor_id = $vendor_id";
$result = mysqli_query($conn, $query);  
header("location:../master/sw_manage_vendor.php");
?>