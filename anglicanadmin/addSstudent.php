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
		
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		$studentname = mysqli_real_escape_string($link,trim($_POST['studentname']));
		$sss = mysqli_real_escape_string($link,trim($_POST['sss']));
		$abc = mysqli_real_escape_string($link,trim($_POST['abc']));
		$sessions = mysqli_real_escape_string($link,trim($_POST['sessions']));
		$term = mysqli_real_escape_string($link,trim($_POST['term']));
		$noofsubjects = mysqli_real_escape_string($link,trim($_POST['noofsubjects']));
		$sex = mysqli_real_escape_string($link,trim($_POST['sex']));
		
		if($studentname  == '' || $sss == '' || $abc == '' || $sessions == '' || $term == ''|| $noofsubjects == '' || $sex == ''){
			
			$msg = 'Please complete the empty fields';
			
			}
		
		
		
		if($msg == ''){
		
		$loginstatus = 0;
		$status = 1;
		$classes = $sss.' '.$abc;
		
		$sql1 = "SELECT * FROM sstudentsexamsrecordtb WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions' LIMIT 1";
		$query1 = mysqli_query($link,$sql1) or die(mysqli_error($link));
		$rowValue1 = mysqli_fetch_assoc($query1);
		$rowNumber1 = mysqli_num_rows($query1);
		
		if($rowNumber1 == 1){
			
				
				$msg = 'Student Record Already Added For The Period';
				//header('Location: reg.php');
	
				}
			
			else{
				
				$xsn = 0;
				$sql22 = "INSERT INTO sstudentsexamsrecordtb VALUES('$xsn','$studentname','$sex','$classes','$term','$sessions','$noofsubjects',NOW())";
				mysqli_query($link,$sql22) or die(mysqli_error($link));
	
				$zero = 0;
				$nograde = '';
				$sqlaccounting = "INSERT INTO saccounting VALUES('$xsn','$studentname','$classes','$term','$sessions','$zero','$zero','$zero','$nograde',NOW())";
	mysqli_query($link,$sqlaccounting) or die(mysqli_error($link));
	
				$sqlagric = "INSERT INTO sagric VALUES('$xsn','$studentname','$classes','$term','$sessions','$zero','$zero','$zero','$nograde',NOW())";
	mysqli_query($link,$sqlagric) or die(mysqli_error($link));
	
	
				$sqlanimalhus = "INSERT INTO sanimalhus VALUES('$xsn','$studentname','$classes','$term','$sessions','$zero','$zero','$zero','$nograde',NOW())";
	mysqli_query($link,$sqlanimalhus) or die(mysqli_error($link));
	
				$sqlbiology = "INSERT INTO sbiology VALUES('$xsn','$studentname','$classes','$term','$sessions','$zero','$zero','$zero','$nograde',NOW())";
	mysqli_query($link,$sqlbiology) or die(mysqli_error($link));
	
				$sqlchemistry = "INSERT INTO schemistry VALUES('$xsn','$studentname','$classes','$term','$sessions','$zero','$zero','$zero','$nograde',NOW())";
	mysqli_query($link,$sqlchemistry) or die(mysqli_error($link));
	
				$sqlcivicedu = "INSERT INTO scivicedu VALUES('$xsn','$studentname','$classes','$term','$sessions','$zero','$zero','$zero','$nograde',NOW())";
	mysqli_query($link,$sqlcivicedu) or die(mysqli_error($link));
	
				$sqlcomputer = "INSERT INTO scomputer VALUES('$xsn','$studentname','$classes','$term','$sessions','$zero','$zero','$zero','$nograde',NOW())";
	mysqli_query($link,$sqlcomputer) or die(mysqli_error($link));
	
				$sqlcrs = "INSERT INTO scrs VALUES('$xsn','$studentname','$classes','$term','$sessions','$zero','$zero','$zero','$nograde',NOW())";
	mysqli_query($link,$sqlcrs) or die(mysqli_error($link));
	
				$sqleconomics = "INSERT INTO seconomics VALUES('$xsn','$studentname','$classes','$term','$sessions','$zero','$zero','$zero','$nograde',NOW())";
	mysqli_query($link,$sqleconomics) or die(mysqli_error($link));
	
				$sqlenglish = "INSERT INTO senglish VALUES('$xsn','$studentname','$classes','$term','$sessions','$zero','$zero','$zero','$nograde',NOW())";
	mysqli_query($link,$sqlenglish) or die(mysqli_error($link));
	
				$sqlfishery = "INSERT INTO sfishery VALUES('$xsn','$studentname','$classes','$term','$sessions','$zero','$zero','$zero','$nograde',NOW())";
	mysqli_query($link,$sqlfishery) or die(mysqli_error($link));
	
				$sqlfoodnut = "INSERT INTO sfoodnut VALUES('$xsn','$studentname','$classes','$term','$sessions','$zero','$zero','$zero','$nograde',NOW())";
	mysqli_query($link,$sqlfoodnut) or die(mysqli_error($link));
	
				$sqlgeography = "INSERT INTO sgeography VALUES('$xsn','$studentname','$classes','$term','$sessions','$zero','$zero','$zero','$nograde',NOW())";
	mysqli_query($link,$sqlgeography) or die(mysqli_error($link));
	
				$sqlgovernment = "INSERT INTO sgovernment VALUES('$xsn','$studentname','$classes','$term','$sessions','$zero','$zero','$zero','$nograde',NOW())";
	mysqli_query($link,$sqlgovernment) or die(mysqli_error($link));
	
				$sqligbo = "INSERT INTO sigbo VALUES('$xsn','$studentname','$classes','$term','$sessions','$zero','$zero','$zero','$nograde',NOW())";
	mysqli_query($link,$sqligbo) or die(mysqli_error($link));
	
				$sqlliterature = "INSERT INTO sliterature VALUES('$xsn','$studentname','$classes','$term','$sessions','$zero','$zero','$zero','$nograde',NOW())";
	mysqli_query($link,$sqlliterature) or die(mysqli_error($link));
	
	
				$sqlmaths = "INSERT INTO smaths VALUES('$xsn','$studentname','$classes','$term','$sessions','$zero','$zero','$zero','$nograde',NOW())";
	mysqli_query($link,$sqlmaths) or die(mysqli_error($link));
	
				$sqlphy= "INSERT INTO sphysics VALUES('$xsn','$studentname','$classes','$term','$sessions','$zero','$zero','$zero','$nograde',NOW())";
	mysqli_query($link,$sqlphy) or die(mysqli_error($link));
	
				$sqlphy= "INSERT INTO smusic VALUES('$xsn','$studentname','$classes','$term','$sessions','$zero','$zero','$zero','$nograde',NOW())";
	mysqli_query($link,$sqlphy) or die(mysqli_error($link));
	
	
	
	$_SESSION['studentname'] = $studentname;
	$_SESSION['classes'] = $classes;
	$_SESSION['sessions'] = $sessions;
	$_SESSION['term'] = $term;
	$_SESSION['noofsubjects'] = $noofsubjects;
			
			header('Location:addSStudentsuccess.php');
			}
			
		}
		
		}
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
<li class="active"><a href="computeJResult.php">Compute Junior Result</a></li>
<li><a href="computeSResult.php">Compute Senior Result</a></li>
<li><a href="viewComputedResult.php">View Computed Results</a></li>
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
<button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="ti-help"></span>
</button><div class="dropdown-menu dropdown-help-menu">
<div class="dropdown-header">Help & Support</div>
<ul class="help-list" id="helps"><li>
<a class="pr-help collapsed" data-toggle="collapse" href="#help1" aria-expanded="true"><span class="ti-user"></span>Profile settings
</a><ul id="help1" class="collapse" data-parent="#helps">
<li><span class="icon ti-panel"></span>
<div class="ctn-info">Das yurio samiun kareo san<br>
<a href="#">Use activity log</a></div>
</li><li><span class="icon ti-save-alt"></span>
<div class="ctn-info">Standard cus imorasun ko ganiu kobe kobe<br>
<a href="#">View more</a></div>
</li><li><span class="icon ti-reload"></span>
<div class="ctn-info">Feel sami qor tay vix<br>
<a href="#">View more</a></div>
</li></ul></li><li>
<a class="pr-help collapsed" data-toggle="collapse" href="#help2" aria-expanded="true">
<span class="ti-email"></span>Who can contact me?
</a><ul id="help2" class="collapse" data-parent="#helps">
<li><span class="icon ti-panel"></span><div class="ctn-info">
Hal pertama yang mesti diingat adalah bagaimana kita bisa survive<br>
<input type="text" class="form-control form-control-sm" placeholder="youremail@example.com"></div>
</li>
</ul>
</li><li>
<a class="pr-help collapsed" data-toggle="collapse" href="#help3" aria-expanded="true">
<span class="ti-na"></span>How to block someone?</a>
<ul id="help3" class="collapse" data-parent="#helps"><li>
<span class="icon ti-panel"></span>
<div class="ctn-info">Hal pertama yang mesti diingat adalah bagaimana kita bisa survive<br>
<a href="index.html">Find out more</a></div>
</li></ul>
</li></ul>
<div class="dropdown-footer">
<a href="javascript:void(0)">see more settings</a></div>
</div></li><li class="dropdown dropdown-notifications">
<button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
<span class="ti-bell"></span><span class="badge badge-pill badge-danger">5</span>
</button><div class="dropdown-menu">
<div class="dropdown-header">Notifications (5)</div>
<div class="list-group notification-list scrollbar-inner">
<a href="#" class="list-group-item list-group-item-action active">
<div class="notif-icon bg-primary"><i class="fa fa-comment"></i>
</div><div class="notif-info">
<strong>Aaron Andriy</strong> commented your status
<span>1 hour ago</span></div>
<div class="unread"></div>
</a><a href="#" class="list-group-item list-group-item-action">
<div class="notif-icon">
<img src="assets/images/profiles/06.jpg" alt="">
</div><div class="notif-info">
<strong>Kyllian Mbase</strong> send you a message
<span>2 hour ago</span></div>
<div class="read"></div></a>
<a href="#" class="list-group-item list-group-item-action active">
<div class="notif-icon bg-success"><i class="fa fa-check"></i>
</div><div class="notif-info">Your setting was approved
<span>3 hour ago</span>
</div>
<div class="unread"></div></a>
<a href="#" class="list-group-item list-group-item-action active">
<div class="notif-icon bg-info"><i class="fa fa-image"></i>
</div><div class="notif-info">You changed your profile picture
<span>3 hour ago</span></div>
<div class="unread"></div></a>
<a href="#" class="list-group-item list-group-item-action">
<div class="notif-icon bg-warning"><i class="fa fa-envelope"></i>
</div><div class="notif-info">Your mailbox critical quota
<span>5 hour ago</span>
</div>
<div class="read"></div></a>
<a href="#" class="list-group-item list-group-item-action">
<div class="notif-icon"><img src="assets/images/profiles/07.jpg" alt="">
</div>
<div class="notif-info">
<strong>Chris Wilox</strong> tagged you
<span>7 hour ago</span>
</div><div class="read"></div></a>
</div><div class="dropdown-footer">
<a href="javascript:void(0)">see all</a></div>
</div>
</li><li class="rightSidebar"><button class="btn btn-r_sidebar" type="button">
<i class="ti-view-list-alt"></i>
</button></li></ul>
</div></header><aside id="right-sidebar" class="r_sidebar">
<div class="content-wrapper"><a href="javascript:void(0)" class="close-btn">
<span class="ti-close"></span>
</a><ul class="nav nav-tabs" id="myTab" role="tablist">
<li class="nav-item">
<a class="nav-link active" id="today-tab" data-toggle="tab" href="#today" aria-expanded="true">Today</a></li>
<li class="nav-item"><a class="nav-link" id="setting-tab" data-toggle="tab" href="#setting">Setting</a>
</li></ul><div class="tab-content sidebar-wrapper scrollbar-inner" id="myTabContent">
<div class="tab-pane fade show active" id="today">
<div class="today-date"><span class="strong"><span id="prMonth"></span> <span id="prDate"></span></span>, <span id="prYear"></span>
<span id="prDay"></span>
</div><div class="block-tab">
<div class="block-title"><span class="ti-time"></span> Schedule
</div><ul class="schedule-list list-unstyled">
<li>
<div class="time">
09.00<span>AM</span></div><div class="point"></div>
<div class="schedule-info">
Briefing with product division
<span class="location"><span class="ti-location-pin"></span> New York, NA</span>
</div></li>
<li>
<div class="time">11.00<span>AM</span>
</div>
<div class="point"></div>
<div class="schedule-info">
Meeting with client
<span class="location"><span class="ti-location-pin"></span> Client office</span>
</div></li>
<li><div class="time">
01.30<span>PM</span></div>
<div class="point"></div><div class="schedule-info">
Project commisioning<span class="location"><span class="ti-location-pin"></span> Office</span>
</div></li>
<li><div class="time">
04.00<span>AM</span></div>
<div class="point"></div><div class="schedule-info">
Public discussion at office<span class="location"><span class="ti-location-pin"></span> Cafetaria</span>
</div></li>
</ul></div><div class="block-tab">
<div class="block-title"><span class="ti-flag"></span> Activity Log
</div><ul class="activity-list list-unstyled">
<li><div class="icon">
<span class="ti-image"></span>
</div><div class="log-info">
Photo profile has been updated<small>2 min ago</small>
</div></li>
<li><div class="icon"><span class="ti-email"></span>
</div><div class="log-info">
New email to <strong>John Cenna</strong> sent<small>4 hrs ago</small>
</div></li><li>
<div class="icon"><span class="ti-email"></span>
</div>
<div class="log-info">You compose new email
<small>6 hrs ago</small></div>
</li><li>
<div class="icon">
<span class="ti-email"></span></div>
<div class="log-info">You compose new email
<small>1 day ago</small></div>
</li></ul>
</div></div><div class="tab-pane fade" id="setting">
<ul class="setting-list list-unstyled">
<li class="header">
Main system</li>
<li><div class="setting-name">
Notifications</div>
<div class="switch"><input type="checkbox" class="js-switch" data-size="small" checked />
</div></li>
<li>
<div class="setting-name">
Auto updates
</div>
<div class="switch">
<input type="checkbox" class="js-switch" />
</div>
</li>
<li><div class="setting-name">
Location
</div><div class="switch">
<input type="checkbox" class="js-switch" data-size="small" checked />
</div></li>
<li class="header">Assistant
</li><li>
<div class="setting-name">
Show Assistant</div>
<div class="switch">
<input type="checkbox" class="js-switch" data-size="small" />
</div>
</li>
<li class="header">
Appearances
</li>
<li>
<div class="setting-name">
Save history
</div>
<div class="switch">
<input type="checkbox" class="js-switch" data-size="small" checked />
</div>
</li>
<li>
<div class="setting-name">
Quick results
</div>
<div class="switch">
<input type="checkbox" class="js-switch" data-size="small" />
</div></li>
</ul>
</div></div></div>		
</aside><main id="main-container">
	<div class="content">
		<h2 class="content-heading">Add Senior Student's Record For Result</h2>
        <h6><font color="#990000"><?php echo $msg; ?></font></h6>

		<div class="row"> 
			<div class="col-12">

				<!-- Examples -->
				<div class="card">
					<div class="card-header">Add Student</div>
					<div class="card-body">

						<form action="" method="post">
                        <table id="example1" class="table table-striped">
							
							
								<tr>
									<td width="14%"><strong>Student Name:</strong></td>
									<td width="22%"><strong>
									  <label>
									    <input name="studentname" type="text" id="studentname" size="30">
								    </label>
							    </strong></td>
									<td width="21%"><strong>Select Class:</strong><strong>
									  <select name="sss" id="sss">
									    <option value=" ">Select Class</option>
									    <option value="SSS1">SSS1</option>
									    <option value="SSS2">SSS2</option>
									    <option value="SSS3">SSS3</option>
								    </select>
									  <select name="abc" id="abc">
									    <option>Select</option>
									    <option value="A">A</option>
									    <option value="B">B</option>
									    <option value="C">C</option>
									    <option value="D">D</option>
									    <option value="E">E</option>
									    <option value="F">F</option>
									    <option value="G">G</option>
									    <option value="H">H</option>
									    <option value="I">I</option>
								    </select>
									</strong></td>
									<td width="16%"><strong>
								    <label></label>
								  Session:
								  <?php 
											
											$sqlsess = "SELECT * FROM sessiontb WHERE sn = 1";
											$querysess = mysqli_query($link,$sqlsess) or die(mysqli_error($link));
											$rowValuesess = mysqli_fetch_assoc($querysess);
										?>
                                  <select name="sessions" id="sessions">
                                    <option value="<?php echo $rowValuesess['session']; ?>"><?php echo $rowValuesess['session']; ?></option>
                                  </select>
                                  </strong></td>
									<td width="15%"><strong>Sex:
									  <select name="sex" id="sex">
									    <option selected value="">Select</option>
									    <option value="Male">Male</option>
									    <option value="Female">Female</option>
                                    </select>
									</strong></td>
									<td width="12%">&nbsp;</td>
								</tr>
								<tr>
									<td><strong>Term:
									  <?php 
											
											$sqlterm = "SELECT * FROM termtb WHERE sn = 1";
											$queryterm = mysqli_query($link,$sqlterm) or die(mysqli_error($link));
											$rowValueterm = mysqli_fetch_assoc($queryterm);
										?>
								    <select name="term" id="term">
									    <option value="<?php echo $rowValueterm['term']; ?>"><?php echo $rowValueterm['term']; ?></option>
								    </select>
									</strong></td>
									<td><strong>No. Of Subjects:
									  <select name="noofsubjects" id="noofsubjects">
									    <option value=" ">Select Number</option>
									    <option value="2">2</option>
									    <option value="3">3</option>
									    <option value="4">4</option>
									    <option value="5">5</option>
									    <option value="6">6</option>
									    <option value="7">7</option>
									    <option value="8">8</option>
									    <option value="9">9</option>
									    <option value="10">10</option>
									    <option value="11">11</option>
									    <option value="12">12</option>
									    <option value="13">13</option>
									    <option value="14">14</option>
									    <option value="15">15</option>
									    <option value="16">16</option>
									    <option value="17">17</option>
									    <option value="18">18</option>
								    </select>
									</strong></td>
									<td>&nbsp;</td>
									<td colspan="2">&nbsp;</td>
									<td><input type="submit" name="add" id="add" value="Add Student"></td>
								</tr>
								
							
						</table>
                        </form>

					</div><!-- .card-body -->
				</div><!-- .card -->
				<!-- /End Examples -->

			</div><!-- .col -->

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
<script src="assets/plugins/DataTables/js/jquery.dataTables.min.js"></script>
<script src="assets/js/pages/table-data.js"></script>
<script type="text/javascript" src="assets/js/custom.js"></script>
</body>

</html>