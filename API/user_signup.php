<?php
require "connect.php";
$data= json_decode(file_get_contents('php://input'), true);

$uname=$data["Uname"];
$ucontact=$data["Ucontact"];
$ucity=$data["Ucity"];
$uaddress=$data["Uaddress"];
$uemail=$data["Uemail"];
$upassword=$data["Upwd"];




$output  = array();
$sql_query = "INSERT INTO usertable(Uname, Ucontact, Ucity, Uaddress, Uemail, Upwd) VALUES ('".$uname."','".$ucontact."','".$ucity."','".$uaddress."','" . $uemail ."','".$upassword."')";
if(mysqli_query($conn,$sql_query))
{
	$output["response"]=1;
	$output["id"]=$conn->insert_id;
	$output["message"] = "Signup Successfull";
} else {
	$output["response"]=0;
	$output["id"]=0;
	$output["message"] = "Error in Signup";
}
echo json_encode($output);
?>