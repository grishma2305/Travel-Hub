<?php
include("../../connection/connection.php");
$id =  $_POST['id'];

$var = "select * from packages where id = '".$id."' ";
$result = mysqli_query($conn,$var);
$row =mysqli_fetch_assoc($result);

$package_image = !empty($_FILES['package_image']['name']) ? $_FILES['package_image']['name'] : $row['package_image'];
$tempname1 = $_FILES['package_image']['tmp_name'];

$package_title = !empty($_POST['package_title']) ? $_POST['package_title'] : $row['package_title'];
$package_content = !empty($_POST['package_content']) ? $_POST['package_content'] : $row['package_content'];

$tour_image = !empty($_FILES['tour_image']['name']) ? $_FILES['tour_image']['name'] : $row['tour_image'];
$tempname2 = $_FILES['tour_image']['tmp_name'];

$tour_title = !empty($_POST['tour_title']) ? $_POST['tour_title'] : $row['tour_title'];
$price = !empty($_POST['price']) ? $_POST['price'] : $row['price'];
$days = !empty($_POST['days']) ? $_POST['days'] : $row['days'];

$highlight_content = !empty($_POST['highlight_content']) ? $_POST['highlight_content'] : $row['highlight_content'];
$highlight_image = !empty($_FILES['highlight_image']['name']) ? $_FILES['highlight_image']['name'] : $row['highlight_image'];
$tempname3 = $_FILES['highlight_image']['tmp_name'];

$journey_detail = !empty($_POST['journey_detail']) ? $_POST['journey_detail'] : $row['journey_detail'];
$includes = !empty($_POST['includes']) ? $_POST['includes'] : $row['includes'];

$folder1 = "../../package_image/".$package_image;
$folder2 = "../../package_image/".$tour_image;
$folder3 = "../../package_image/".$highlight_image;

$data = "update packages set 
	package_image = '".$package_image."', 
	package_title ='".$package_title."', 
	package_content ='".$package_content."', 

	tour_image ='".$tour_image."', 

	tour_title ='".$tour_title."', 
	price ='".$price."', 
	days ='".$days."', 

	highlight_content ='".$highlight_content."', 
	highlight_image ='".$highlight_image."', 

	journey_detail ='".$journey_detail."', 
	includes ='".$includes."'

	where id = '".$id."'";

move_uploaded_file($tempname1, $folder1);
move_uploaded_file($tempname2, $folder2);
move_uploaded_file($tempname3, $folder3);

if(mysqli_query($conn,$data))
{
	$_SESSION['packages_edit'] = "Package edited successfully";
	header("location: ../packages.php");
}
else
{
	$_SESSION['packages_edit_err'] = "Something wrong ....!";
	header("location: ../packages_edit.php");
}
?>