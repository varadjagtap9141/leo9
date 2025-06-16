<?php
include "../master/connection.php";
extract($_POST);
$query="INSERT INTO branches(branch_name,phone_no,city,district,address,pincode,email,status) VALUES ('$branch_name', '$phone_no', '$city', '$district', '$address', '$pincode', '$email', '$status')";
$result=mysqli_query($conn, $query);
header("Location:../master/sw_manage_branch.php");
?>