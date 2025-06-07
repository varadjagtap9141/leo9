<?php
include "../master/connection.php";
extract($_POST);
if($_FILES['slider_img']['size']>0)
{
    $slider_img=time().$_FILES['slider_img']['name'];
    move_uploaded_file($_FILES['slider_img']['tmp_name'],"uploads/".$slider_img);
    $query="UPDATE slider SET slider_img='$slider_img' WHERE slider_id=$slider_id";
    mysqli_query($conn,$query);
}
$query="UPDATE slider SET slider_title='$slider_title' WHERE slider_id=$slider_id";
mysqli_query($conn, $query);
header("Location:../master/manage_slider.php");
?>