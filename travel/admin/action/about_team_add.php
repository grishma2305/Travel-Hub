<?php 
	include("../../connection/connection.php");

	if(isset($_FILES['file']['tmp_name']) && ($_POST['position']) && ($_POST['teamname']) )
	{
		
		$name = $_POST['teamname'];
		$position = $_POST['position'];
		$image = $_FILES['file']['name'];
		$tempname = $_FILES['file']['tmp_name'];	

		$folder = "../../about_team_image/".$image;

		$sql = "insert into about_team(image, name, position) Values('".$image."', '".$name."', '".$position."')";

		mysqli_query($conn,$sql);

		if(move_uploaded_file($tempname, $folder))
		{
			$_SESSION['about_team_add'] = "Team created successfully";
			header("location: ../about_team.php");
		}
		else
		{
			$_SESSION['about_team_add_err'] = "Something wrong ....!";
			header("location: ../about_team_add.php");
		}

	}
?>