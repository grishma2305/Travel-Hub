<?php 
	include("../../connection/connection.php");

	if(isset($_FILES['package_image']['tmp_name']) && ($_POST['package_title']) && ($_POST['package_content']))
	{
		$package_image = $_FILES['package_image']['name'];
		$tempname1 = $_FILES['package_image']['tmp_name'];

		$package_title = $_POST['package_title'];
		$package_content = $_POST['package_content'];

		$tourimage = $_FILES['tour_image']['name'];
		$tempname2 = $_FILES['tour_image']['tmp_name'];

		$tourtitle = $_POST['tour_title'];
		$price = $_POST['price'];
		$days = $_POST['days'];

		$highlight_content = $_POST['highlight_content'];
		$hl_image = $_FILES['highlight_image']['name'];
		$tempname3 = $_FILES['highlight_image']['tmp_name'];


		$journey_detail = $_POST['journey_detail'];
		$includes = $_POST['includes'];

		$folder1 = "../../package_image/".$package_image;
		$folder2 = "../../package_image/".$tourimage;
		$folder3 = "../../package_image/".$hl_image;


		$sql = "insert into packages(
		package_image, 
		package_title, 
		package_content, 
		tour_image,
		tour_title, 
		price, 
		days, 
		highlight_content, 
		highlight_image, 
		journey_detail, 
		includes) 
		Values(
		'".$package_image."', 
		'".$package_title."',
		'".$package_content."',
		'".$tourimage."',
		'".$tourtitle."',
		'".$price."',
		'".$days."',
		'".$highlight_content."', 
		'".$hl_image."', 
		'".$journey_detail."',
		'".$includes."')";

		move_uploaded_file($tempname1, $folder1);
		move_uploaded_file($tempname2, $folder2);
		move_uploaded_file($tempname3, $folder3);

		if(mysqli_query($conn,$sql))
		{
			$_SESSION['packages_add'] = "Package created successfully";
			header("location: ../packages.php");
		}
		else
		{
			$_SESSION['packages_add_err'] = "Something wrong ....!";
			header("location: ../packages_add.php");
		}

	}
?>