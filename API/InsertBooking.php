<?php
require "connect.php";
$data= json_decode(file_get_contents('php://input'), true);

$Bid=$data["Bid"];
$Bdate=$data["Bdate"];
$Bsource=$data["Bsource"];
$Bcharge=$data["Bcharge"];
$Bdestination=$data["Bdestination"];
$Bpincode=$data["Bpincode"];
$uid=$data["Uid"];
$Bassign=$data["Bassign"];
$Did=$data["Did"];
$BDeliDate=$data["BDeliDate"];
$Pid=$data["Pid"];
$PayID=$data["PayID"];
$PayDate=date("Y-m-d");
$PayAmount=$data["PayAmount"];
$PayStatus=$data["PayStatus"];







$output     = array();
$sql_query = "INSERT INTO booktable(Bid, Bdate, Bsource, Bdestination, Bpincode, Uid,Bcharge, Bassign, Did, BDeliDate, Pid) VALUES ('".$Bid."','".$Bdate."','".$Bsource."','".$Bdestination."','" .$Bpincode."','".$Bcharge."','".$uid."','".$Bassign."','".$Did."','".$BDeliDate."','".$Pid."')";
if(mysqli_query($conn,$sql_query))
{
	//$output     = array();
	$sql_query2 = "INSERT INTO paymentable(PayID, PayDate, PayAmount, PayStatus, Uid) VALUES ('".$PayID."','".$PayDate."','".$PayAmount."','".$PayStatus."','".$uid."')";
	if(mysqli_query($conn,$sql_query2))
	{
	
	
	
	$output["response"]=1;
	$output["id"]=$conn->insert_id;
	$output["message"] = "Booking Successfull";
}
}
 else {
	$output["response"]=0;
	$output["id"]=0;
	$output["message"] = "Error in Booking";
}
echo json_encode($output);
?>