<?php 
	include("../../connection/connection.php");

	if(isset($_POST['name']))
	{
		$name = $_POST['name'];
		$review = $_POST['review'];
		$image = $_FILES['file']['name'];
		$tempname = $_FILES['file']['tmp_name'];

		$folder = "../../review_image/".$image;		

		echo $sql="insert into review
		(name,
		review,
		image
		)
		Values
		('".$name."',
		'".$review."',
		'".$image."'
		)";	

		mysqli_query($conn,$sql)

		if (move_uploaded_file($tempname, $folder))
		{
			$_SESSION['review'] = "Successfull!!";
			header("location: ../../../index.php");
		}
		else
		{
			$_SESSION['review_err'] = "Something wrong ....!";
			header("location: ../review.php");
		}
	}
	else
	{
		echo "error";
	}
?>

<?php
include("../../connection/connection.php");

	if(isset($_POST['name']))
	{
		$name = $_POST['name'];
		$review = $_POST['review'];
		$phone = $_POST['phone'];
		$subject = $_POST['subject'];
		$messages = $_POST['messages'];

		$sql="insert into contact
		(name,
		review,
		phone,
		subject,
		messages
		)
		Values
		('".$name."',
		'".$review."',
		'".$phone."',
		'".$subject."',
		'".$messages."'
		)";

		if(mysqli_query($conn,$sql))
		{
			$_SESSION['contact'] = "Successfull!!";
			header("location: ../../contact-us.php");
		}
		else
		{
			$_SESSION['contact_err'] = "Something wrong ....!";
			header("location: ../contact.php");
		}
	}

?>