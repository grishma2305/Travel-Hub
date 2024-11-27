<?php  
include("../../connection/connection.php");
$id =  $_POST['id'];

$var = "select * from slider where id = '".$id."' ";
$result = mysqli_query($conn,$var);
$row =mysqli_fetch_assoc($result);

$title = !empty($_POST['title']) ? $_POST['title'] : $row['title'];
$image = !empty($_FILES['image']['name']) ? $_FILES['image']['name'] : $row['image'];
$tempname = $_FILES['image']['tmp_name'];

$folder = "../../slider_image/".$image;

$data1 = "update slider set image = '".$image."', title='".$title."' where id = '".$id."'";

move_uploaded_file($tempname, $folder);

if(mysqli_query($conn,$data1))
{
	$_SESSION['slider_edit'] = "Slider edited successfully";
	header("location: ../slider_list.php");
}
else{
	$_SESSION['slider_edit_err'] = "Something wrong ....!";
	header("location: ../slider_edit.php");
}
?>