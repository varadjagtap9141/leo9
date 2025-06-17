<?php
include "../master/connection.php";
extract($_GET);
$query="DELETE FROM roles WHERE role_id='$role_id'";
$result=mysqli_query($conn,$query);
header("location:../master/sw_manage_role.php");
?>