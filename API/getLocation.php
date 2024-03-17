<?php

require "connect.php";
$data= json_decode(file_get_contents("php://input"),true);

$Did =$data["Did"] ;

$sql_query = "SELECT * FROM deliveryperson where  Did ='$Did'";


$result = mysqli_query($conn,$sql_query);  
$output = array();
//$check = mysqli_fetch_assoc($result);

$value= array();

while ($row =mysqli_fetch_array($result, MYSQLI_BOTH))
{
   // $row = mysqli_fetch_row($result))
     $value[] = $row[10];
     $value[] = $row[11];


}


echo json_encode(array("result"=>$value));


?>