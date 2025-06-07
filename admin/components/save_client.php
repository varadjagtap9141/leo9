<?php
include "../master/connection.php";
extract($_POST);
if($_FILES['logo']['size']>0)
{
    $logo=time().$_FILES['logo']['name'];
    move_uploaded_file($_FILES['logo']['tmp_name'],"uploads/".$logo);
}
$query="INSERT INTO client_slider(client_name,phone_no,client_email,logo) values ('$client_name', '$phone_no', '$client_email', '$logo')";
$result=mysqli_query($conn, $query);
header("Location:../master/manage_client.php");
?>
