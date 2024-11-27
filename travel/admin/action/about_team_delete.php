<?php
include("../../connection/connection.php");
$id =  $_GET['id'];

$sql = "delete from about_team where id = '".$id."' ";

if(mysqli_query($conn, $sql))
{
	$_SESSION['about_team_delete'] = "Team deleted successfully";
	header("location: ../about_team.php");
}
else
{
	$_SESSION['about_team_delete_err'] = "Something went wrong!!";
	header("location: ../about_team.php");
}
?>