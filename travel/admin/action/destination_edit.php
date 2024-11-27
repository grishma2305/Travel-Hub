<?php  
include("../../connection/connection.php");

$id =  $_POST['id'];

$var = "select * from destination where id = '".$id."' ";
$result = mysqli_query($conn,$var);
$row =mysqli_fetch_assoc($result);

$title = !empty($_POST['title']) ? $_POST['title'] : $row['title'];
$description = !empty($_POST['description']) ? $_POST['description'] : $row['description'];
$price =  !empty($_POST['price']) ? $_POST['price'] : $row['price'];
$image = !empty($_FILES['file']['name']) ? $_FILES['file']['name'] : $row['image'];
$tempname = $_FILES['file']['tmp_name'];

$data = "update destination set image = '".$image."', title = '".$title."', description = '".$description."', price = '".$price."' where id = $id ";
$folder = "../../destination_image".$image;

move_uploaded_file($tempname, $folder);

if(mysqli_query($conn,$data))
{
	$_SESSION['destination_edit'] = "Destination edited successfully";
	header("location: ../destination_list.php");
}
else
{
	$_SESSION['destination_edit_err'] = "Something went wrong!!!";
	header("location: ../destination_edit.php");
}
?>