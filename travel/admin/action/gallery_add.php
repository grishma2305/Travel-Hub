<?php 
	include("../../connection/connection.php");

	if(isset($_FILES['file']['tmp_name']))
	{
		$image = $_FILES['file']['name'];
		$tempname = $_FILES['file']['tmp_name'];

		$folder = "../../gallery_image/".$image;

		$sql = "insert into gallery(image) Values('".$image."')";

		mysqli_query($conn,$sql);

		if(move_uploaded_file($tempname, $folder))
		{
			$_SESSION['gallery_add'] = "Gallery created successfully";
			header("location: ../gallery.php");
		}
		else
		{
			$_SESSION['gallery_add_err'] = "Something wrong ....!";
			header("location: ../gallery_add.php");
		}

	}
?>