<?php
session_start();
unset($_SESSION["adloginname"]);
unset($_SESSION["Aid"]);
session_destroy();
header("location:../index.php");
exit();
 ?>