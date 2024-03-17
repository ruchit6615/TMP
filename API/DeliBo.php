<?php
require "connect.php";
$data= json_decode(file_get_contents('php://input'), true);
$Did     = $data["Did"];
$oldPassword     = $data["oldPassword"];
$newPassword  = $data["newPassword"];	
$output= array();
$sql_query1 = "UPDATE deliveryperson SET Dpwd='$newPassword' WHERE Did='$Did' AND Dpwd = '$oldPassword'";
if(mysqli_query($conn,$sql_query1))
{
	$output["response"]=1;
	$output["message"] = "Password Updated";
} else {
	$output["response"]=0;
	$output["message"] = "Password not Updated";
}
echo json_encode($output);
?>