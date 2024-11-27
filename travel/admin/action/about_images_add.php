<?php 
	include("../../connection/connection.php");

	if (isset($_FILES['file']['tmp_name']))
	{
		$image = $_FILES['file']['name'];
		$tempname = $_FILES['file']['tmp_name'];

		$folder = "../../about_image/".$image;

		$sql = "insert into about_images(image) Values('".$image."')";

		mysqli_query($conn,$sql);

		if(move_uploaded_file($tempname, $folder))
		{
			$_SESSION['about_images_add'] = "Image added successfully";
			header("location: ../about_images.php");
		}
		else
		{
			$_SESSION['about_images_add_err'] = "Something wrong ....!";
			header("location: ../about_images_add.php");
		}

	}
?>