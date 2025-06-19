<?php
include "../master/connection.php";
extract($_POST);
if($_FILES['passbook']['size']>0)
{
    $passbook=time().$_FILES['passbook']['name'];
    move_uploaded_file($_FILES['passbook']['tmp_name'], "uploads/".$passbook);
}
$query="INSERT INTO vendors(vendor_name,vendor_type_id,address,gst_pan,phone_no,email,bank_name,acc_no,ifsc,bank_address,city,district,state,pincode,status,passbook) VALUES ('$vendor_name','$vendor_type_id','$address','$gst_pan','$phone_no','$email','$bank_name','$acc_no','$ifsc','$bank_address','$city','$district','$state','$pincode','$status','$passbook')";
$result=mysqli_query($conn,$query);
header("Location: ../master/sw_manage_vendor.php");
?>