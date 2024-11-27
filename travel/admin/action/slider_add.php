<?php 
include("../../connection/connection.php");

// if(isset($_POST['slider_add']))
// {
if(isset($_POST['title']) && $_FILES['file']['tmp_name'] ){
	$title =  $_POST['title'];

	$image = $_FILES['file']['name'];
	$tempname = $_FILES['file']['tmp_name'];

	$folder = "../../slider_image/".$image;

	$sql = "insert into slider(image, title) Values ('".$image."','".$title."')";

	mysqli_query($conn,$sql);

	if(move_uploaded_file($tempname, $folder))
	{
		$_SESSION['slider_add'] = "Slider created successfully";
		header("location: ../slider_list.php");
	}
	else{
		$_SESSION['slider_add_err'] = "Something wrong ....!";
		header("location: ../slider_add.php");
	}

}
else{
	print("Please fill out all fields");
}
?>