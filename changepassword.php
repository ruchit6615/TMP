<?php
     require "connection.php";
     if (!isset($_SESSION['aid'])){
     header('location:../index.php');
     exit();
    }
    if(isset($_SESSION['aid']))
    {
    	$sql1="select * FROM admintb1 WHERE aid='".$_SESSION['aid']."'";
    	$result1=mysqli_query($conn,$sql1);
    	$rows=mysqli_fetch_array($result1,MYSQLI_BOTH);
    }


    if(isset($_REQUEST['save']))
    {
    	$aid1=$_SESSION['aid'];
    	$current_password=$_REQUEST['oldpass'];
		$new_password = $_REQUEST['newpass'];
		$retype_password = $_REQUEST['conpass'];
		if ($new_password == $retype_password)
		{


		if ($current_password == $rows['apwd'])
		{

			//$image=$_FILES['img']['nmae'];
			//$move1="upload/".$image;
			//move_uploaded-files($_FILES['img']['tmp_name'],$move1);
            
			$sql="UPDATE admintb1 SET apwd = '$new_password' WHERE aid='".$aid1."'";    
		//}
		$result=mysqli_query($conn,$sql);
?>
<script type="text/javascript">alert('Password changed successfully'); 
window.location.href="Home.php"</script>
  <?php    
  }
  else

  	 {
 ?>
  	 	<script type="text/javascript">alert('Current Password does not matched'); 
  	 window.location.href="Home.php"</script>
  	 	<?php
  	 }
}
else
	 {
?>
	 	 	 	<script type="text/javascript">alert('New Password and confirm password must be same'); 
	 	 	 window.location.href="Home.php"</script>
	<?php }
}


?>
    



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
       <title>Admin Panel 
</title>

<script type="application/x-javascript"> 
addEventListener("load", function() { 
  setTimeout(hideURLbar, 0); 


  const togglePassword = document.getElementById('togglePassword');
  const password = document.getElementById('password');
 
  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
  });

}, false); function hideURLbar(){ window.scrollTo(0,1); } 


addEventListener("load", function() { 
  setTimeout(hideURLbar, 0); 


  const togglePassword1 = document.getElementById('togglePassword1');
  const password1 = document.getElementById('password1');
 
  togglePassword1.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password1.getAttribute('type') === 'password' ? 'text' : 'password';
    password1.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
  });

}, false); function hideURLbar(){ window.scrollTo(0,1); } 


addEventListener("load", function() { 
  setTimeout(hideURLbar, 0); 


  const togglePassword2 = document.getElementById('togglePassword2');
  const password2 = document.getElementById('password2');
 
  togglePassword2.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password2.getAttribute('type') === 'password' ? 'text' : 'password';
    password2.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
  });

}, false); function hideURLbar(){ window.scrollTo(0,1); } 





</script>


<!-- Custom Theme files -->
<link rel="stylesheet" href="/restaurant project_nm/fontawesome-free-6.0.0-beta3-web/css/all.min.css">






        <!-- bootstrap & fontawesome -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="font-awesome/4.5.0/css/font-awesome.min.css" />

        <!-- page specific plugin styles -->

        <!-- text fonts -->
        <link rel="stylesheet" href="css/fonts.googleapis.com.css" />

        <!-- ace styles -->
        <link rel="stylesheet" href="css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
        <link rel="stylesheet" href="css/ace-skins.min.css" />
        <link rel="stylesheet" href="css/ace-rtl.min.css" />

        <!-- ace settings handler -->
        <script src="js/ace-extra.min.js"></script>
    </head>

    <body class="no-skin">
        <div id="navbar" class="navbar navbar-default  ace-save-state">
            <div class="navbar-container ace-save-state" id="navbar-container">
                <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
                    <span class="sr-only">Menu</span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>
                </button>

                <div class="navbar-header pull-left">
                    <a href="Dashboard.php" class="navbar-brand">
                        <small>
                            <i class="fa fa-building-o"></i>
                          Restaurant Aggregator System

                        </small>
                    </a>
                </div>

                <div class="navbar-buttons navbar-header pull-right" role="navigation">
                    <ul class="nav ace-nav">
                        
                        <li class="light-blue dropdown-modal">
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                                <img class="nav-user-photo" src="images/user.jpg" alt="Jason's Photo" />
                                <span class="user-info">
                                    <small>Welcome,</small>
                                    Admin
                                </span>

                                <i class="ace-icon fa fa-caret-down"></i>
                            </a>

                                                       <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                                

                                <li class="divider"></li>
                                <li>
                                    <a href="changepassword.php">
                                        <i class="ace-icon fa fa-lock"></i>
                                        Change Password
                                    </a>
                                </li>
                                <li>
                                    <a href="admin_logout.php">
                                        <i class="ace-icon fa fa-power-off"></i>
                                        Logout
                                    </a>
                                </li>
                            </ul>

</li>
                    </ul>
                </div>
            </div><!-- /.navbar-container -->
        </div>

        <div class="main-container ace-save-state" id="main-container">
            <script type="text/javascript">
                try{ace.settings.loadState('main-container')}catch(e){}
            </script>

            <div id="sidebar" class="sidebar                  responsive                    ace-save-state">
                <script type="text/javascript">
                    try{ace.settings.loadState('sidebar')}catch(e){}
                </script>
                <ul class="nav nav-list">
                    <li class="active">
                        <a href="Home.php">
                            <i class="menu-icon fa fa-home"></i>
                            <span class="menu-text"> Home </span>
                        </a>

                        <b class="arrow"></b>
                    </li>
                  
                    <li>
                        <a href="manage_company.php">
                            <i class="menu-icon fa fa-eye"></i>
                            <span class="menu-text">Company</span>
                        </a>

                        <b class="arrow"></b>
                    </li>
                   <li>
                        <a href="manage_student.php">
                            <i class="menu-icon fa fa-user"></i>
                            <span class="menu-text">Students</span>
                        </a>

                        <b class="arrow"></b>
                    </li>
 <li>
                        <a href="manage_freelancer.php">
                            <i class="menu-icon fa fa-users"></i>
                            <span class="menu-text">Freelancers</span>
                        </a>

                        <b class="arrow"></b>
                    </li>
                        <li>
                            <a href="manage_course.php">
                                <i class="menu-icon fa fa-graduation-cap"></i>
                                        Courses
                            </a>
                        </li>
                                
                     <li>
                        <a href="manage_request.php">
                            <i class="menu-icon fa fa-paper-plane"></i>
                            <span class="menu-text">Requests</span>
                        </a>

                        <b class="arrow"></b>
                    </li>
                    <li>
                        <a href="manage_feedback.php">
                            <i class="menu-icon fa fa-bullhorn"></i>
                            <span class="menu-text">Feedback</span>
                        </a>

                        <b class="arrow"></b>
                    </li>
                    <li>
                        <a href="logout.php">
                            <i class="menu-icon fa fa-lock"></i>
                            <span class="menu-text"> Logout </span>
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul><!-- /.nav-list -->

<!-- /.nav-list -->
                <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
                    <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
                </div>
            </div>

            <div class="main-content">
                <div class="main-content-inner">
                    <div class="page-content">
                        <div class="page-header">
                            <h1>Change Password From Here :</h1>
                        </div><!-- /.page-header --><br>
                        

<div style="margin-left: 10px;padding:30px;">

<form method="POST">
 Current Password :<br>
  <input type="password" name="1text"  id="password" required maxlength="40" size="20">
  <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer; color: black;"></i>
 <br>
 <br>
New Password : <br>
<input type="password" name ="2text" id="password1" required maxlength="40" size="20">
<i class="far fa-eye" id="togglePassword1" style="margin-left: -30px; cursor: pointer; color: black;"></i>

<br>
<br>
Confirm Password : <br>
<input type="password" name="3text" id="password2" required maxlength="40">
<i class="far fa-eye" id="togglePassword2" style="margin-left: -30px; cursor: pointer; color: black;"></i>
<br>
<br>
&nbsp <input type="submit" value="Submit" name = "save">
&nbsp <input type="reset" value="Reset">
   
</div>

                    </div><!-- /.page-content -->
                </div>
            </div><!-- /.main-content -->

            <div class="footer">
                <div class="footer-inner">
                    <div class="footer-content">
                        <span class="bigger-120">
                            © Developed By  Jay Prajapati | Karan Patel | Yash Pawar  | Sandhya Singh .   
                           
                        </span>
                    </div>
                </div>
            </div>

            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
        </div><!-- /.main-container -->

        <!-- basic scripts -->

        <!--[if !IE]> -->
        <script src="js/jquery-2.1.4.min.js"></script>

        <script type="text/javascript">
            if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
        </script>
        <script src="js/bootstrap.min.js"></script>

        <!-- page specific plugin scripts -->

        <script src="js/jquery-ui.custom.min.js"></script>
        <script src="js/jquery.ui.touch-punch.min.js"></script>
        <script src="js/jquery.easypiechart.min.js"></script>
        <script src="js/jquery.sparkline.index.min.js"></script>
        <script src="js/jquery.flot.min.js"></script>
        <script src="js/jquery.flot.pie.min.js"></script>
        <script src="js/jquery.flot.resize.min.js"></script>

        <!-- ace scripts -->
        <script src="js/ace-elements.min.js"></script>
        <script src="js/ace.min.js"></script>
    </body>
</html>



