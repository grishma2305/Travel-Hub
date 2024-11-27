<?php 
	include("../../connection/connection.php");

	if(isset($_FILES['image']['tmp_name']) && ($_POST['title']) && ($_POST['price']) )
	{
		$title = $_POST['title'];
		$description = $_POST['description'];
		$price = $_POST['price'];
		$image = $_FILES['image']['name'];
		$tempname = $_FILES['image']['tmp_name'];

		$folder = "../../destination_image/".$image;

		$sql = "insert into destination(image, title, description, price) Values('".$image."', '".$title."', '".$description."', '".$price."')";

		mysqli_query($conn,$sql);

		if(move_uploaded_file($tempname, $folder))
		{
			$_SESSION['destination_add'] = "Destination created successfully";
			header("location: ../destination_list.php");
		}
		else{
			$_SESSION['destination_add_err'] = "Something wrong ....!";
			header("location: ../destination_add.php");
		}


		}
?>