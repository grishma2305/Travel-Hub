<?php 
	include("../../connection/connection.php");

	if (isset($_POST['about_description_add']))
	{
		$description=$_POST['description'];

		$sql = "insert into about_description(description) Values('".$description."')";

		if (mysqli_query($conn,$sql))
		{
			$_SESSION['about_description_add'] = "Description created successfulyy";
			header("location: ../about_description.php");
		}
		else
		{
			$_SESSION['about_description_add_err'] = "Something Wrong....!";
			header("location: ../about_description_add.php");
		}

	}
?>