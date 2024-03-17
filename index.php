<?php

if(!isset($_SESSION['Aid'])) 
  { 
          session_start(); 
    } 

 require "connect.php";
  
  //check button is click or not using this function isset().
  if (isset($_REQUEST['login']))
  {
	
  	$uname=$_REQUEST['email'];
  	$pass1=$_REQUEST['pwd'];

  	$sql="SELECT * FROM admintable WHERE Aemail ='".$uname."' and Apwd ='".$pass1."'";
  	$res=mysqli_query($conn,$sql);
  	$row=mysqli_num_rows($res); 

  	if ($row==1) 
  	{
      while($row2 = mysqli_fetch_array($res,MYSQLI_BOTH)) {

    //session variable created and stored in the value.
   //session variable created and stored in the value.
    $Aid = $row2["Aid"];
    $adminname = $row2["Aname"];
    $_SESSION['adloginname']=$adminname;
    $_SESSION['Aid']  = $Aid;
    //header("Location:admin/dashboard.php");

		

  	?>
	<script type="text/javascript">window.location.href="admin/Dashboard.php"</script>
  	<?php        
      	}
  	}
    else
  	{ 
	?>
  		<div style="color:white;padding-top:10px;padding-bottom:10px;background-color:red;text-align:center;font-size:20px;">
		Username and Password Invalid... Try again...!!!
		</div>
	<?php	
	}
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Take my parcel</title>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>


<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form" method="POST">
				<span class="login100-form-title1 p-b-37">
					TMP
				</span>
				<span class="login100-form-title p-b-37">
					Admin Login
				</span>
				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username ">
					<input class="input100" type="text" name="email" placeholder="username ">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="input100" type="password" name="pwd" placeholder="password"  pattern="^(?=.*\d)(?=.*[A-Z])(?!.*\s).*.$" title="must contain @ upper case digit"  >
					<span class="focus-input100"></span>
				</div>
				<div class="container-login100-form-btn">
					<button type="submit" name="login" value="Login" class="login100-form-btn">
						Login
					</button>
				</div>
			</form>
		</div>
	</div>
	<div id="dropDownSelect1"></div>
	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>
</body>
</html>

<!--
<body>
    <form method="POST">
        <label>Email</label><br>
        <input type="email" size="20" required="true" name="email"/><br>
        <label>Password</label><br>
        <input type="password" size="20" name="pwd" pattern="^(?=.*\d)(?=.*[A-Z])(?!.*\s).*.$^(?=.*\d)(?=.*[A-Z])(?!.*\s).*.$" title="must contain @ upper case digit"  >
        <br/>
        <input type="submit" name="login" value="Login" />
        <input type="reset" name="Reset" value="Reset" />
        
        

    </form>
    
</body>-->

