<?php
include "../master/connection.php";
echo "<pre>";
print_r($_POST);
print_r($_FILES);
if($_FILES['pan']['size']>0)
{
    $pan=time().$_FILES['pan']['name'];
    move_uploaded_file($_FILES['pan']['tmp_name'],"uploads/".$pan);
}
if($_FILES['adhar']['size']>0)
{
    $adhar=time().$_FILES['adhar']['name'];
    move_uploaded_file($_FILES['adhar']['tmp_name'],"uploads/".$adhar);
}
if($_FILES['passbook']['size']>0)
{
    $passbook=time().$_FILES['passbook']['name'];
    move_uploaded_file($_FILES['passbook']['tmp_name'],"uploads/".$passbook);
}
if($_POST['website'])
{
    $query="INSERT INTO clients(website) values ('$website')";
}
else
{
    $query="INSERT INTO clients(client_name,gst_no,address,city,state,pincode,status,contact_no,alt_contact_no,pan_no,tan_no,bank_name,bank_acc_no,ifsc_code,district,pan,adhar,passbook) values ('$client_name', '$gst_no', '$address', '$city', '$state', '$pincode', '$status', '$contact_no', '$alt_contact_no','$pan_no','$tan_no','$bank_name','$bank_acc_no','$ifsc_code','$district','$pan','$adhar','$passbook')";
}
$result=mysqli_query($conn, $query);
print_r($result);
?>