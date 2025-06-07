<?php
include "../master/connection.php";
extract($_POST);
if($_FILES['logo']['size']>0)
{
    $logo=time().$_FILES['logo']['name'];
    move_uploaded_file($_FILES['logo']['tmp_name'],"uploads/".$logo);
    $query="UPDATE client_slider SET logo='$logo' WHERE client_id=$client_id";
    mysqli_query($conn,$query);
}
$query="UPDATE client_slider SET client_name='$client_name',phone_no='$phone_no',client_email='$client_email' WHERE client_id=$client_id";
$result=mysqli_query($conn, $query);
header("Location:../master/manage_client.php");
?>