<?php
include "../master/connection.php";
extract($_POST);
if($_FILES['profile']['size']>0)
{
    $profile=time().$_FILES['profile']['name'];
    move_uploaded_file($_FILES['profile']['tmp_name'], "uploads/".$profile);
}
$query="INSERT INTO user(branch_id,role_id,user_name,email,phone_no,profile,status) VALUES ('$branch_id','$role_id','$user_name','$email','$phone_no','$profile','$status')";
$result=mysqli_query($conn,$query);
header("location:../master/sw_manage_user.php");
?>