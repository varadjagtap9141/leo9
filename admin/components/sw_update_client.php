<?php
include "../master/connection.php";
extract($_POST);
if($_FILES['pan']['size']>0)
{
    $pan=time().$_FILES['pan']['name'];
    move_uploaded_file($_FILES['pan']['tmp_name'],"uploads/".$pan);
    $query="UPDATE clients SET pan='$pan' WHERE client_id='$client_id'";
    mysqli_query($conn,$query);
}
if($_FILES['adhar']['size']>0)
{
    $adhar=time().$_FILES['adhar']['name'];
    move_uploaded_file($_FILES['adhar']['tmp_name'],"uploads/".$adhar);
    $query="UPDATE clients SET adhar='$adhar' WHERE client_id='$client_id'";
    mysqli_query($conn,$query);
}
if($_FILES['passbook']['size']>0)
{
    $passbook=time().$_FILES['passbook']['name'];
    move_uploaded_file($_FILES['passbook']['tmp_name'],"uploads/".$passbook);
    $query="UPDATE clients SET passbook='$passbook' WHERE client_id='$client_id'";
    mysqli_query($conn,$query);
}
$query="UPDATE clients SET 
client_name='$client_name',
gst_no='$gst_no',
address='$address',
city='$city',
state='$state',
pincode='$pincode',
status='$status',
contact_no='$contact_no',
alt_contact_no='$alt_contact_no',
website='$website',
pan_no='$pan_no',
tan_no='$tan_no',
bank_name='$bank_name',
bank_acc_no='$bank_acc_no',
bank_address='$bank_address',
ifsc_code='$ifsc_code',
district='$district'
WHERE client_id='$client_id'";
$result=mysqli_query($conn, $query);
// print_r($result);
header("Location:../master/sw_manage_client.php");
?>