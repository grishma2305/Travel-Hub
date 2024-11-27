<?php
include("../../connection/connection.php");
$id = $_GET['id'];

$sql = "delete from about_images where id = '".$id."' ";

if(mysqli_query($conn, $sql))
{
	$_SESSION['about_images_delete'] = "Image deleted successfully";
	header("location: ../about_images.php");
}
else
{
	$_SESSION['about_images_delete_err'] = "Something went wrong!!";
	header("location: ../about_images.php");
}
?>