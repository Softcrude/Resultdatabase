<?php
session_start();
include('../data.php');
$msg = '';

if(!isset($_SESSION['key'])){
	
	header('Location: index.php');
	
	}

	$sn = $_SESSION['key'];
	$status = 1;
	
		$sql = "SELECT * FROM admin WHERE sn = '$sn' AND status = '$status' LIMIT 1";
		$query = mysqli_query($link,$sql) or die(mysqli_error($link));
		$rowValue = mysqli_fetch_assoc($query);



	/* if($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		
		
		
		$username = mysqli_real_escape_string($link,trim($_POST['email']));
		$pass = mysqli_real_escape_string($link,trim($_POST['password']));
		
		if($username  == '' || $pass == ''){
			
			$msg = 'Please complete the empty fields';
			
			}
			
			if($username == 'Admin' || $username == 'admin' || $username == 'ADMIN'){
			
			$msg = 'You cannot use this username';
		}
		
		if($msg == ''){
		$pass = md5($pass);
		
		$loginstatus = 0;
		$status = 1;
		
		$sql = "SELECT * FROM admin WHERE email = '$username' AND password = '$pass' AND status = '$status' LIMIT 1";
		$query = mysqli_query($link,$sql) or die(mysqli_error($link));
		$rowValue = mysqli_fetch_assoc($query);
		$rowNumber = mysqli_num_rows($query);
		
		if($rowNumber ==1){
			
			
			$sql2 = "SELECT * FROM admin WHERE loginstatus = '$loginstatus' LIMIT 1";
			$query2 = mysqli_query($link,$sql2) or die(mysqli_error($link));
			$rowValue2 = mysqli_fetch_assoc($query2);
			$rowNumber2 = mysqli_num_rows($query2);
		
		
				if($rowNumber2 ==1){
					
					$_SESSION['key'] = $rowValue['id'];
					mysqli_query($link,"UPDATE admin SET loginstatus = 1 WHERE email = '$username' AND password = '$pass' LIMIT 1") or die(mysqli_error($link));
					header('Location: controlpanel.php');
			
				}
				else{
					
				$msg = "Owner Of This Credentials Already Logged On.";
				
				}
			
			
				}
			
			else{
				
				$msg = 'Invalid username or password';
				//header('Location: reg.php');
			}
			
		}
		
		} */
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
	<title>Anglican College Owerrinta - Admin</title>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="x-ua-compatible">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="yes" name="apple-touch-fullscreen">
	
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<link href="assets/plugins/DataTables/css/jquery.dataTables.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>

<div id="page-container">
<nav id="sidebar" class="sidenav">
<div class="sidebar-wrapper">
<div class="profile-sidebar">
<div class="avatar">
<img src="assets/images/profiles/05.jpg" alt="">
</div>
<div class="profile-name">
<?php echo $rowValue['adminname']; ?>
<button class="btn-prof" type="button" data-toggle="dropdown" aria-expanded="false">
<i class="fa fa-ellipsis-v"></i>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="#"><span class="icon ti-user mr-3"></span>Profile</a>
<a class="dropdown-item" href="#"><span class="icon ti-email mr-3"></span>Inbox</a>
<a class="dropdown-item" href="#"><span class="icon ti-settings mr-3"></span>Settings</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="logout.php"><span class="icon ti-power-off mr-3"></span>Logout</a>
</div>
</div>
<div class="profile-title">
Administrator</div>
</div><ul class="main-menu" id="menus">

<li>
<a href="controlpanel.php">
<span class="icon ti-home"></span>Home
</a>
</li>

<li>
<a class="pr-mn" data-toggle="collapse" href="#dashboard" aria-expanded="true">
<span class="icon ti-ruler-pencil"></span>Add Student/ Result
</a>
<ul id="dashboard" class="collapse show" data-parent="#menus"><li class="active"><a href="addJstudent.php">Add Junior Class Students</a></li>
<li><a href="updateJResult.php">Update Junior Class Result</a></li>
<li><a href="computeJResult.php">Compute Junior Result</a></li>
<li><a href="addSstudent.php">Add Senior Class Students</a></li>
<li><a href="updateSResult.php">Update Senior Class Result</a></li>
<li><a href="computeSResult.php">Compute Senior Result</a></li>
</ul>
</li>


<li>
<a class="pr-mn collapsed" data-toggle="collapse" href="#assignments" aria-expanded="true">
<span class="icon ti-notepad"></span>Add Assignments
</a>
<ul id="assignments" class="collapse" data-parent="#menus">
<li class="active"><a href="#">Junior Class</a>
</li>
<li><a href="#">Senior Class</a></li>
</ul>
</li>


<li>
<a class="pr-mn collapsed" data-toggle="collapse" href="#news" aria-expanded="true">
<span class="icon ti-layout-cta-right"></span>News
</a>
<ul id="news" class="collapse" data-parent="#menus">
<li class="active"><a href="#">Add News</a>
</li>
<li><a href="#">Remove News</a></li>
<li><a href="#">Update News</a></li>
</ul>
</li>

<li>
<a class="pr-mn collapsed" data-toggle="collapse" href="#sticker" aria-expanded="true">
<span class="icon ti-layout-cta-right"></span>Sticker
</a>
<ul id="sticker" class="collapse" data-parent="#menus">
<li class="active"><a href="sticksession.php">Stick To a Session</a>
</li>
<li><a href="stickterm.php">Stick To a Term</a></li>
</ul>
</li>


<li>
<a class="pr-mn collapsed" data-toggle="collapse" href="#compute" aria-expanded="true">
<span class="icon ti-layout-cta-right"></span>Computation
</a>
<ul id="compute" class="collapse" data-parent="#menus">
<li class="active"><a href="computeJResult.php">Compute Junior Result</a>
</li>
<li><a href="computeSResult.php">Compute Senior Result</a></li>
<li><a href="resetcomputedresult.php">Reset Computed Result</a></li>
</ul>
</li>


<li>
<a href="logout.php">
<span class="icon ti-power-off"></span>Logout
</a>
</li>

</ul></div>
</nav><header id="page-header" class="pageheader">
<div class="content-header"><div class="navbar-header">
<button type="button" class="btn-bars btn">
<span class="ti-menu"></span>
</button><div class="app-title">
<img src="assets/images/logo_white.png" alt="">
</div><div class="mobile-nav">
<button class="btn" type="button" id="mobileBtn">
<i class="ti-layout-grid2-alt"></i></button>
</div></div>
<ul class="nav navbar-nav navbar-right"><li class="dropdown dropdown-search">
<button class="btn search-btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="ti-search"></span></button>
<div class="dropdown-menu dropdown-search-container">
<div class="search-container">
<span class="ti-search"></span>
<input type="text" placeholder="Search" autocomplete="off"></div>
</div><div class="search-expand-container">
<span class="ti-search"></span>
<input type="text" class="expand-search" placeholder="Search" autocomplete="off">
</div>
</li><li class="dropdown dropdown-help">
</li><li class="dropdown dropdown-notifications">

</li><li class="rightSidebar"></li></ul>
</div></header><aside id="right-sidebar" class="r_sidebar">
		
</aside>


	<!-- MAIN CONTAINER -->
	<main id="main-container">
		<div class="content">
		  <h1>WELCOME ANGLICAN COLLEGE CONTROL PANEL
		  </h1>
		  <div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					
					<!-- Item sold -->
					<div class="card stats-card">
						<div class="stats-icon">
							<span class="ti-bag"></span>
						</div>
						<div class="stats-ctn">
							<div>
							  <h2><strong>Term</strong></h2>
		                </div>
							<span class="desc"><?php 
											
											$sqlterm = "SELECT * FROM termtb WHERE sn = 1";
											$queryterm = mysqli_query($link,$sqlterm) or die(mysqli_error($link));
											$rowValueterm = mysqli_fetch_assoc($queryterm);
											echo $rowValueterm['term'];
										?></span>
						</div>
					</div><!-- .card -->
					<!-- /End Item sold -->

			</div><!-- .col -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					
					<!-- Earnings -->
					<div class="card stats-card">
						<div class="stats-icon">
							<span class="ti-wallet"></span>
						</div>
						<div class="stats-ctn">
							<div>
							  <h2><strong>Session</strong></h2>
				        </div>
							<span class="desc"> <?php 
											
											$sqlsess = "SELECT * FROM sessiontb WHERE sn = 1";
											$querysess = mysqli_query($link,$sqlsess) or die(mysqli_error($link));
											$rowValuesess = mysqli_fetch_assoc($querysess);
											echo $rowValuesess['session'];
										?></span>
						</div>
					</div><!-- .card -->
					<!-- /End Earnings -->

				</div><!-- .col --><!-- .col -->
		  <div class="col-lg-3 col-md-6 col-sm-6">
					
					<!-- Notifications -->
					<div class="card stats-card">
						<div class="stats-icon">
							<span class="ti-bell"></span>
						</div>
						<div class="stats-ctn">
							<div class="stats-counter"><span class="counter">22</span></div>
							<span class="desc">notifications</span>
						</div>
					</div><!-- .card -->
					<!-- /End Notifications -->

		    </div><!-- .col -->
	    </div><!-- .row -->

			<div class="row"><!-- .col --><!-- .col -->
			</div><!-- .row -->

		  <div class="row"><!-- .col -->
			</div><!-- .row -->

		</div><!-- .content -->
	</main><footer id="page-footer" class="pagefooter"><div class="content">
<div class="row">
<div class="copyright col-sm-12 col-md-12 col-lg-6">
&copy; 2017 Anglican College Owerrinta - Admin</div><div class="footer-nav col-sm-12 col-md-12 col-lg-6">
<a href="javascript:void(0)">About</a>
<a href="javascript:void(0)">Terms</a></div></div>
</div></footer></div>

<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="assets/js/popper.min.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/holder.js"></script>
<script type="text/javascript" src="assets/plugins/switchery/switchery.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="assets/plugins/counter-up-master/jquery.counterup.min.js"></script>
<script type="text/javascript" src="assets/plugins/chart.js/Chart.bundle.js"></script>
<script src="assets/plugins/DataTables/js/jquery.dataTables.min.js"></script>
<script src="assets/js/pages/table-data.js"></script>
<script src="assets/plugins/peity/jquery.peity.min.js"></script>
<script src="assets/plugins/card-refresh/refresh.js"></script>
<script src="assets/js/pages/dashboard.js"></script>
<script type="text/javascript" src="assets/js/custom.js"></script>
</body>

</html>