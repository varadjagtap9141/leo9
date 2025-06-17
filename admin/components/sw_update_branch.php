<?php
include "../master/connection.php";
extract($_POST);
$query="UPDATE branches SET 
branch_name='$branch_name', 
phone_no='$phone_no', 
city='$city', 
district='$district', 
address='$address', 
pincode='$pincode',
email='$email', 
status='$status'
WHERE branch_id=$branch_id";
$result=mysqli_query($conn, $query);
header("Location:../master/sw_manage_branch.php");
?>"
?>