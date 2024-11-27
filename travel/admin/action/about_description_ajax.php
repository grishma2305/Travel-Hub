<?php 
include("../../connection/connection.php");
 
$id = $_POST['id'];

$sql = "select * from about_description where id = '".$id."' ";
$result = mysqli_query($conn,$sql);
$row =mysqli_fetch_assoc($result);

if ($row['status']==1){
	$new_status=0;
}
else{
	$new_status=1;
}

$data = "update about_description set status = '".$new_status."' where id = '".$id."' ";

if(mysqli_query($conn,$data))
{
	echo "success";
}
else
{
	echo "error";
}


?>