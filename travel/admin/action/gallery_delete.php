<?php
include("../../connection/connection.php");
$id =  $_GET['id'];

$sql = "delete from gallery where id = '".$id."' ";

if(mysqli_query($conn, $sql))
{
	$_SESSION['gallery_delete'] = "Gallery deleted successfully";
	header("location: ../gallery.php");
}
else
{
	$_SESSION['gallery_delete_err'] = "Something went wrong!!";
	header("location: ../gallery.php");
}
?>