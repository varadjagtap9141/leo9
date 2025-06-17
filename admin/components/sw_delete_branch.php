<?php
include "../master/connection.php";
extract($_GET);
$query="DELETE FROM branches WHERE branch_id=$branch_id";
$result=mysqli_query($conn, $query);
header("location:../master/sw_manage_branch.php");
?>