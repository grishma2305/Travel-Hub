<?php  
include("../../connection/connection.php");

$id =  $_POST['id'];

$var = "select * from about_description where id = '".$id."' ";
$result = mysqli_query($conn,$var);
$row =mysqli_fetch_assoc($result);

$description = !empty($_POST['description']) ? $_POST['description'] : $row['description'];

$data = "update about_description set description = '".$description."' where id = '$id' ";

if(mysqli_query($conn, $data))
{
	$_SESSION['about_description_edit'] = "Description edited successfully";
	header("location: ../about_description.php");
}
else
{
	$_SESSION['about_description_edit_err'] = "Something went Wrong!!";
	header("location: ../about_description_edit.php");
}
?>