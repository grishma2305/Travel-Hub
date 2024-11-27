<?php
	$servername="localhost";
	$username="root";
	$password="";
	$database="travel_hub";

	//Create Connection
	$conn=mysqli_connect($servername,$username,$password,$database);

	//check
	if (!$conn){
		die("Connection failed");
	}
	session_start();
?>