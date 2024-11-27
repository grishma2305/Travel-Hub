<?php
include("../../connection/connection.php");
$id = $_POST['id'];

$var = "select * from about_images where id = '".$id."' ";
$result = mysqli_query($conn,$var);
$row =mysqli_fetch_assoc($result);

$image = !empty($_FILES['image']['name']) ? $_FILES['image']['name'] : $row['image'];
$tempname = $_FILES['image']['tmp_name'];

$folder = "../../about_image/".$image;

$data = "update about_images set image = '".$image."' where id = '".$id."'";

move_uploaded_file($tempname, $folder);

if(mysqli_query($conn,$data))
{
	$_SESSION['about_images_edit'] = "Image edited successfully";
	header("location: ../about_images.php");
}
else
{
	$_SESSION['about_images_edit_err'] = "Something wrong ....!";
	header("location: ../about_images_edit.php");
}

?>