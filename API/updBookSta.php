<?php
require "connect.php";
$data= json_decode(file_get_contents('php://input'), true);

$Bid=$data["Bid"];
$BDeliDate=$data["BDeliDate"];
$Bstatus=$data["Bstatus"];




$output     = array();
$sql_query = "UPDATE booktable SET Bstatus = '$Bstatus' , BDeliDate = '$BDeliDate'  WHERE Bid = '$Bid'";
if(mysqli_query($conn,$sql_query))
{
	$output["response"]=1;
	
	$output["message"] = "Parcel Delivery Completed";
} else {
	$output["response"]=0;
	$output["id"]=0;
	$output["message"] = "Error";
}
echo json_encode($output);
?>