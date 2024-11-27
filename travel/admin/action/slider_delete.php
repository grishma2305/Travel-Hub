<?php  
include("../../connection/connection.php");
$id =  $_GET['id'];

$sql = "delete from slider where id = '".$id."'";


if(mysqli_query($conn,$sql)){
		$_SESSION['slider_delete'] = "Slider deleted successfully";
		header("location: ../slider_list.php");
	}
	else{
		$_SESSION['slider_delete_err'] = "Something wrong ....!";
		header("location: ../slider_list.php");
	}
?>