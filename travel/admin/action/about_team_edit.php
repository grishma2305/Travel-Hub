<?php
include("../../connection/connection.php");
$id =  $_POST['id'];

$var = "select * from about_team where id = '".$id."' ";
$result = mysqli_query($conn,$var);
$row =mysqli_fetch_assoc($result);

$name = !empty($_POST['name']) ? $_POST['name'] : $row['name'];
$position = !empty($_POST['position']) ? $_POST['position'] : $row['position'];
$image = !empty($_FILES['image']['name']) ? $_FILES['image']['name'] : $row['image'];
$tempname = $_FILES['image']['tmp_name'];

$folder = "../../about_team_image/".$image;

$data = "update about_team set image = '".$image."', name ='".$name."', position ='".$position."' where id = '".$id."'";

move_uploaded_file($tempname, $folder);


if(mysqli_query($conn,$data))
{
	$_SESSION['about_team_edit'] = "Team edited successfully";
	header("location: ../about_team.php");
}
else
{
	$_SESSION['about_team_edit_err'] = "Something wrong ....!";
	header("location: ../about_team_edit.php");
}

?>