<?php 
	include("../../connection/connection.php");

	if(isset($_POST['contact']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$subject = $_POST['subject'];
		$messages = $_POST['messages'];

		$sql="insert into contact
		(name,
		email,
		phone,
		subject,
		messages
		)
		Values
		('".$name."',
		'".$email."',
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