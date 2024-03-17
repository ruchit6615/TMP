<?php

require "connect.php";
$data= json_decode(file_get_contents("php://input"),true);

$uemail = $data["Uemail"];
$upassword= $data["Upwd"];

$sql_query = "SELECT * FROM usertable WHERE Uemail ='". $uemail. "' and Upwd ='" . $upassword. "'";


$result = mysqli_query($conn,$sql_query); 
$output = array();
$check = mysqli_fetch_assoc($result);

//if we got some result
 if(isset($check))
{
$output["response"]=1;
$output["data"]=$check;
$output["message"] = "Login Successful";
} 
else 
{
$output["response"]=0;
$output["data"]=null;
$output["message"] = "Login Failed!!";
}

echo json_encode($output);

?>