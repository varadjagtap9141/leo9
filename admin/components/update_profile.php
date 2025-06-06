<?php
include "../master/connection.php";
extract($_POST);

if($_FILES['brochure']['size']>0)
{
    $brochure=time().$_FILES['brochure']['name'];
    move_uploaded_file($_FILES['brochure']['tmp_name'],"uploads/".$brochure);
    $query="UPDATE company_profile SET brochure='$brochure' WHERE profile_id=$profile_id";
    mysqli_query($conn,$query);
}
if($_FILES['logo']['size']>0)
{
    $logo=time().$_FILES['logo']['name'];
    move_uploaded_file($_FILES['logo']['tmp_name'],"uploads/".$logo);
    $query="UPDATE company_profile SET logo='$logo' WHERE profile_id=$profile_id";
    mysqli_query($conn,$query);
}
if($_FILES['favicon']['size']>0)
{
    $favicon=time().$_FILES['favicon']['name'];
    move_uploaded_file($_FILES['favicon']['tmp_name'],"uploads/".$favicon);
    $query="UPDATE company_profile SET favicon='$favicon' WHERE profile_id=$profile_id";
    mysqli_query($conn,$query);
}
if($_FILES['f_logo']['size']>0)
{
    $f_logo=time().$_FILES['f_logo']['name'];
    move_uploaded_file($_FILES['f_logo']['tmp_name'],"uploads/".$f_logo);
    $query="UPDATE company_profile SET f_logo='$f_logo' WHERE profile_id=$profile_id";
    mysqli_query($conn,$query);
}
$query="UPDATE company_profile SET company_name='$company_name', 
title='$title',
phone_no='$phone_no',
email_1='$email_1',
email_2='$email_2',
url_1='$url_1',
url_2='$url_2',
url_3='$url_3',
url_4='$url_4',
url_5='$url_5' WHERE profile_id=$profile_id";
$result=mysqli_query($conn,$query);
header("location:../master/profile.php");
?>