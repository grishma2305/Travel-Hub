<?php
include("../../connection/connection.php");
$id =  $_GET['id'];

$sql = "delete from packages where id = '".$id."' ";

if(mysqli_query($conn, $sql))
{
	$_SESSION['packages_delete'] = "Package deleted successfully";
	header("location: ../packages.php");
}
else
{
	$_SESSION['packages_delete_err'] = "Something went wrong!!";
	header("location: ../packages.php");
}
?>