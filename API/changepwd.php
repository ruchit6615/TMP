<?php
require "connect.php";
$data= json_decode(file_get_contents('php://input'), true);
$uid     = $data["uid"];
$oldPassword     = $data["oldPassword"];
$newPassword  = $data["newPassword"];	
$output= array();
$sql_query1 = "UPDATE user_master SET Upsw='$newPassword' WHERE Uid='$uid' AND Upsw = '$oldPassword'";
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