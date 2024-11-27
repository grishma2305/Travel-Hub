<?php 
	include("../../connection/connection.php");

	if(isset($_POST['tour_booking']))
	{
		$title = $_POST['destination'];
		$check_in = $_POST['check_in'];
		$persons = $_POST['persons'];
		$budget = $_POST['budget'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$country = $_POST['country'];
		$city = $_POST['city'];
		$requirements = $_POST['requirements'];

		$sql="insert into tour_booking
		(destination,
		check_in,
		persons,
		budget,
		name,
		email,
		phone,
		country,
		city,
		requirements)
		Values(
		'".$title."',
		'".$check_in."',
		'".$persons."',
		'".$budget."',
		'".$name."',
		'".$email."',
		'".$phone."',
		'".$country."',
		'".$city."',
		'".$requirements."')";

		if(mysqli_query($conn,$sql))
		{
			$_SESSION['tour_booking'] = "Enquiry sent successfully!!";
			header("location: ../../tour-booking.php");
		}
		else
		{
			$_SESSION['tour_booking_err'] = "Something wrong ....!!";
			header("location: ../tour_booking.php");
		}
	}
?>