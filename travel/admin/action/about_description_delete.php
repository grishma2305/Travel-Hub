<?php
include("../../connection/connection.php");
$id =  $_GET['id'];

$sql = "delete from about_description where id = '".$id."' ";

if(mysqli_query($conn,$sql))
{
	$_SESSION['about_description_delete'] = "Description deleted successfully";
	header("location: ../about_description.php");
}
else
{
	$_SESSION['about_description_delete_err'] = "Something went wrong!!";
	header("location: ../about_description.php");
}
?>