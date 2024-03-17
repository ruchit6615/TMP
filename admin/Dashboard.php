<!DOCTYPE php>
<php lang="en">

<head>
	<title>TMP</title>
	<!-- CSS Files -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/atlantis.min.css">
	<link rel="stylesheet" href="assets/css/custome.css">
	
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				
				<a href=../index.php" class="logo" style="color: white;font-size: 16px;font-family:Monaco (Body);     text-shadow: 1px 1px 1px; ">
					Take My Parcel
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto more" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="fa fa-bars"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="fa fa-ellipsis-v"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<!-- <i class="fa fa-bars"></i> -->
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				
				<div class="container-fluid">
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="assets/img/profile.jpg" alt="Divyang" class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="assets/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4>Admin</h4>
												<p class="text-muted">prathamvichare645@gmail.com</p><a href="" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
											</div>
										</div>
									</li>
									<li>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="Profile.php">My Profile</a>
										<a class="dropdown-item" href="/ChangePwd.html">Change Password</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="./logout.php">Logout</a>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="assets/img/profile.jpg" alt="Divyang" class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Admin
									<span class="user-level">Administrator</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="Profile.php">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									<li>
										<a href="./ChangePwd.html">
											<span class="link-collapse" >Change Password</span>
										</a>
									</li>
									<li>
										<a href="./logout.php">
											<span class="link-collapse">Logout</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item item">
							<a  href="home.php" >
								<i class="fa fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-item item">
							<a  href="./Manage_payment.php" >
								<i class="fa fa-credit-card"></i>
								<p>Manage Payment</p>
							</a>
						</li>
						<li class="nav-item item">
							<a  href="./Manage_DeliveryP.php" >
								<i class="fa fa-male"></i>
								<p>Manage delivery-person</p>
							</a>
						</li>
						
						<li class="nav-item item">
							<a  href="./Manage_parcel.php" >
								<i class="fa fa-truck"></i>
								<p>Manage Parcel</p>
							</a>
						</li>
						<li class="nav-item">
							<a  href="./Manage_user.php">
								<i class="fa fa-users"></i>
								<p>Manage Users</p>
							</a>
							
						</li>
						<li class="nav-item">
							<a  href="./Manage_Booking.php">
								<i class="fa fa-book"></i>
								<p>Manage Booking</p>
							</a>
							
						</li>
						<li class="nav-item">
							<a href="#">
								<i class="fa fa-bell"></i>
								<p>Notification</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="./logout.php">
								<i class="fa fa-lock"></i>
								<p>Logout</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Dashboard</h2>
								<h5 class="text-white op-7 mb-2">Welcome Admin to Dashboard</h5>
							</div>
							<div class="ml-md-auto py-2 py-md-0">
								
							</div>
						</div>
					</div>
				</div>
				<div class="page-inner mt--5">
					<div class="row mt--2">
						<div class="col-md-12">
							<div class="card full-height">
								<div class="card-body">
									<div class="card-title">Overall statistics</div>
									<hr>
									<div class="row">
									    <div class="col-md-3">
									    	<a href="">
											<div class="card-counter primary">
												<i class="fa fa-users"></i>
												<span class="count-numbers">12</span>
												<span class="count-name">Users</span>
											</div>
											</a>
									    </div>

									    <div class="col-md-3">
									    	<a href="">
									      	<div class="card-counter info">
										        <i class="fa fa-truck"></i>
										        <span class="count-numbers">599</span>
										        <span class="count-name">Parcels</span>
									      	</div>
									      	</a>
									    </div>
										<div class="col-md-3">
											<a href="">
									      	<div class="card-counter success">
										        <i class="fa fa-male"></i>
										        <span class="count-numbers">6996</span>
										        <span class="count-name">Delivery Persons</span>
									      	</div>
									      	</a>
									    </div>
										<div class="col-md-3">
											<a href="">
									      	<div class="card-counter success">
										        <i class="fa fa-credit-card"></i>
										        <span class="count-numbers">1200</span>
										        <span class="count-name">Payment</span>
									      	</div>
									      	</a>
									    </div>

									    <div class="col-md-3">
											<a href="">
									      	<div class="card-counter success">
										        <i class="fa fa-book"></i>
										        <span class="count-numbers">6875</span>
										        <span class="count-name">Booking</span>
									      	</div>
									      	</a>
									    </div>

									    <div class="col-md-3">
									    	<a href="">
									      	<div class="card-counter danger">
										        <i class="fa fa-list"></i>
										        <span class="count-numbers">20</span>
										        <span class="count-name">Category</span>
									      	</div>
									      	</a>
									    </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul class="nav">
							
						</ul>
					</nav>
					<div class="copyright ml-auto">
						2022-2023 Take My Parcel , made with <i class="fa fa-heart heart text-danger"></i> by <a href="">Pratham Vichare,Aman chahal,Ruchit Bhanushali,Sandip Parmar</a>
					</div>				
				</div>
			</footer>
		</div>
	</div>
	<!--   Core JS Files   -->
	<script src="assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="assets/js/core/popper.min.js"></script>
	<script src="assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


	<!-- Chart JS -->
	<script src="assets/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="assets/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="assets/js/plugin/datatables/datatables.min.js"></script>

	<!-- Bootstrap Notify -->
	<script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Sweet Alert -->
	<script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
	<script src="assets/js/atlantis.min.js"></script>

	
</body>
</php>