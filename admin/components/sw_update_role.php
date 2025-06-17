<?php
include "../master/connection.php";
extract($_POST);
$query="UPDATE roles SET 
role='$role', 
description='$description', 
status='$status'
WHERE role_id=$role_id";
$result=mysqli_query($conn, $query);
header("Location:../master/sw_manage_role.php");
?>"
?>