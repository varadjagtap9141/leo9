<?php
include "../master/connection.php";
extract($_POST);
$query="INSERT INTO roles(role,description,status) VALUES ('$role', '$description','$status')";
$result=mysqli_query($conn, $query);
header("Location:../master/sw_manage_role.php");
?>