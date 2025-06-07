<?php
include "../master/connection.php";
extract($_POST);
if($_FILES['slider_img']['size']>0)
{
    $slider_img=time().$_FILES['slider_img']['name'];
    move_uploaded_file($_FILES['slider_img']['tmp_name'],"uploads/".$slider_img);
}
$query="INSERT INTO slider(slider_title,slider_img) values('$slider_title','$slider_img')";
$result=mysqli_query($conn,$query);
header("Location:../master/manage_slider.php");
?>