<?php
include "../master/connection.php";
extract($_POST);
print_r($_POST);
print_r($_FILES);
if($_FILES['passbook']['size']>0)
{
    $passbook=time().$_FILES['passbook']['name'];
    move_uploaded_file($_FILES['passbook']['tmp_name'], "uploads/".$passbook);
    $query="UPDATE vendors SET passbook='$passbook' WHERE vendor_id='$vendor_id'";
    mysqli_query($conn, $query);
}
$query="UPDATE vendors SET 
vendor_name='$vendor_name',
address='$address',
vendor_type_id='$vendor_type_id',
gst_pan='$gst_pan',
phone_no='$phone_no',
email='$email',
city='$city',
district='$district',
state='$state',
pincode='$pincode',
bank_name='$bank_name',
bank_address='$bank_address',
acc_no='$acc_no',
ifsc='$ifsc',
status='$status'
WHERE vendor_id='$vendor_id'";
$result=mysqli_query($conn, $query);
header("location:../master/sw_manage_vendor.php");
?>