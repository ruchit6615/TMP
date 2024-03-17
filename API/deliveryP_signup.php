<?php
require "connect.php";
$data= json_decode(file_get_contents('php://input'), true);

$dname=$data["Dname"];
$dcontact=$data["Dcontact"];
$demail=$data["Demail"];
$dpassword=$data["Dpwd"];
$daddress=$data["Daddress"];
$dlicense=$data["Dlicense"];
$dcity=$data["Dcity"];
$daadhar=$data["Daadhar"];


$output     = array();
$sql_query = "INSERT INTO deliveryperson(Dname,Dcontact,Demail,Dpwd,Daddress,Dlicense,Dcity,Daadhar) VALUES ('".$dname."','".$dcontact."','" . $demail ."','".$dpassword."','".$daddress."', '".$dlicense."','".$dcity."' ,'".$daadhar."')";
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