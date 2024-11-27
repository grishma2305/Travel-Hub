<?php
include("../../connection/connection.php");
$id =  $_GET['id'];

$sql = "delete from destination where id = '".$id."' ";

if(mysqli_query($conn, $sql))
{
	$_SESSION['destination_delete'] = "Destination deleted successfully";
	header("location: ../destination_list.php");
}
else
{
	$_SESSION['destination_delete_err'] = "Something went wrong!!";
	header("location: ../destination_list.php");
}
?>