<?php
session_start();
include('../data.php');
$msg = '';

if(!isset($_SESSION['key'])){
	
	header('Location: index.php');
	
	}

		$studentname = $_SESSION['studentname'];
		$classes = $_SESSION['classes'];
		$sessions = $_SESSION['sessions'];
		$term = $_SESSION['term'];
		$noofsubjects = $_SESSION['noofsubjects'];
		
		$sn = $_SESSION['key'];
		$status = 1;
	
		$sql = "SELECT * FROM admin WHERE sn = '$sn' AND status = '$status' LIMIT 1";
		$query = mysqli_query($link,$sql) or die(mysqli_error($link));
		$rowValue = mysqli_fetch_assoc($query);
		
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		
	
		///////////maths
		$mathsCA = mysqli_real_escape_string($link,trim($_POST['mathsCA']));
		$mathsExam = mysqli_real_escape_string($link,trim($_POST['mathsExam']));
		$mathsTotal = mysqli_real_escape_string($link,trim($_POST['mathsTotal']));
		$mathsGrade = mysqli_real_escape_string($link,trim($_POST['mathsGrade']));
		
		////////////////english
		$engCA = mysqli_real_escape_string($link,trim($_POST['engCA']));
		$engExam = mysqli_real_escape_string($link,trim($_POST['engExam']));
		$engTotal = mysqli_real_escape_string($link,trim($_POST['engTotal']));
		$engGrade = mysqli_real_escape_string($link,trim($_POST['engGrade']));
		
	
		$zero = 0;
		$nograde = '';
		$sqlenglish = "UPDATE jenglish  SET cascore = '$engCA', examscore = '$engExam',  totalscore = '$engTotal',  grade = '$engGrade' WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		mysqli_query($link,$sqlenglish) or die(mysqli_error($link));
	
		$sqlenglish = "UPDATE jmaths  SET cascore = '$mathsCA', examscore = '$mathsExam',  totalscore = '$mathsTotal',  grade = '$mathsGrade' WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		mysqli_query($link,$sqlenglish) or die(mysqli_error($link));
			
		 
		header("Location:success.php");
	
		
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
    
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <script type="text/javascript">
  
  //English
    $(document).ready(function () {
      //iterate through each textboxes
      $('.txtMarksEng').each(function () {
        
        // call 'calcSumAndAverage' method on keyup handler.
        $(this).keyup(function () {
          calcSumAndAverageEng();
        });
      });
    });
    
    function calcSumAndAverageEng() {
      var total = 0;
      var average = 0;
      
      //iterate through each textboxes with class name '.txtMarks' 
      //and add the values.
      $('.txtMarksEng').each(function () {
        
        //add only if the value is number
        if (!isNaN(this.value) && this.value.length != 0) {
          total += parseFloat(this.value);
        }
      });
      
      //Calculate the Average
      if (!isNaN(total) && total != 0) {
        
        //Get count of textboxes with class '.txtMarks'
        var txtboxes = $('.txtMarksEng').length;
        average = parseFloat(total) / txtboxes;
      }
	   var h;
	   
		if (total >= 70){
  			h = "A";
		}
		else if (total >= 60){
  			h = "B";
		}
		else if (total >= 50){
 	 		h = "C";
		}
		else if (total >= 46){
  			h = "D";
		}	
		else if (total >= 40){
  			h = "E";
		}
		else{
  			h = "F";
		}
      
      //Show Total Marks.
      //$('#totalMarks').html(h);
	  
	  document.getElementById("engTotal").value = total;
      // Show Average upto 2 decimal places using .toFixed() method.
      //$('#average').html(average.toFixed(2));
	  document.getElementById("engGrade").value = h;
    }
  </script>
  
  <script type="text/javascript">
  
  //Mathematics
    $(document).ready(function () {
      //iterate through each textboxes
      $('.txtMarksMaths').each(function () {
        
        // call 'calcSumAndAverage' method on keyup handler.
        $(this).keyup(function () {
          calcSumAndAveragemMaths();
        });
      });
    });
    
    function calcSumAndAveragemMaths() {
      var total = 0;
      var average = 0;
      
      //iterate through each textboxes with class name '.txtMarks' 
      //and add the values.
      $('.txtMarksMaths').each(function () {
        
        //add only if the value is number
        if (!isNaN(this.value) && this.value.length != 0) {
          total += parseFloat(this.value);
        }
      });
      
      //Calculate the Average
      if (!isNaN(total) && total != 0) {
        
        //Get count of textboxes with class '.txtMarks'
        var txtboxes = $('.txtMarksMaths').length;
        average = parseFloat(total) / txtboxes;
      }
	   var h;
	   
		if (total >= 70){
  			h = "A";
		}
		else if (total >= 60){
  			h = "B";
		}
		else if (total >= 50){
 	 		h = "C";
		}
		else if (total >= 46){
  			h = "D";
		}	
		else if (total >= 40){
  			h = "E";
		}
		else{
  			h = "F";
		}
      
      //Show Total Marks.
      //$('#totalMarks').html(h);
	  
	  document.getElementById("mathsTotal").value = total;
      // Show Average upto 2 decimal places using .toFixed() method.
      //$('#average').html(average.toFixed(2));
	  document.getElementById("mathsGrade").value = h;
    }
  </script>

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
		<h2 class="content-heading">Add Junior Student's Record For Result</h2>
        <h6><font color="#990000"><?php echo $msg; ?></font></h6>

		<div class="row"> 
			<div class="col-12">

				<!-- Examples -->
				<div class="card">
					<div class="card-header">Add Junior Class Result</div>
					<div class="card-body">

						<form action="" method="post">
                        <table id="example1" class="table table-striped">
							
								<tr>
									<td width="13%"><strong>Student Name:</strong></td>
									<td width="25%"><font color="#996600"><strong><?php echo $studentname; ?></strong></font></td>
									<td width="15%"><strong>Select Class:</strong></td>
									<td width="27%"><font color="#996600"><strong><?php echo $classes; ?></strong></font></td>
									<td width="8%"><strong>Session:</strong></td>
									<td width="12%"><font color="#996600"><strong><?php echo $sessions; ?></strong></font></td>
								</tr>
								<tr>
									<td><strong>Term:</strong></td>
									<td><font color="#996600"><strong><?php echo $term; ?></strong></font></td>
									<td><strong>No. Of Subjects:</strong></td>
									<td colspan="2"><font color="#996600"><strong><?php echo $noofsubjects; ?></strong></font></td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td colspan="6" align="center"><table width="100%" border="0">
									  <tr align="center">
									    <td width="21%">Subjects</td>
									    <td width="18%">CA</td>
									    <td width="27%">EXAM</td>
									    <td width="17%">TOTAL</td>
									    <td width="17%">GRADE</td>
								      </tr>
									  <tr>
									    <td align="center">English Language</td>
									    <td align="center"><label>
									      <input type="text" name="engCA" id="engCA" class="txtMarksEng" autocomplete="off">
								        </label></td>
									    <td align="center"><input type="text" name="engExam" id="engExam" class="txtMarksEng" autocomplete="off"></td>
									    <td align="center"><input name="engTotal" type="text" id="engTotal" readonly="readonly"></td>
									    <td align="center"><input name="engGrade" type="text" id="engGrade" readonly="readonly"></td>
								      </tr>
									  <tr>
									    <td align="center">Mathematics</td>
									    <td align="center"><label>
									      <input type="text" name="mathsCA" id="mathsCA" class="txtMarksMaths" autocomplete="off">
									      </label></td>
									    <td align="center"><input type="text" name="mathsExam" id="mathsExam" class="txtMarksMaths" autocomplete="off"></td>
									    <td align="center"><input name="mathsTotal" type="text" id="mathsTotal" readonly="readonly"></td>
									    <td align="center"><input name="mathsGrade" type="text" id="mathsGrade" readonly="readonly"></td>
								      </tr>
									  <tr>
									    <td align="center">&nbsp;</td>
									    <td align="center">&nbsp;</td>
									    <td align="center">&nbsp;</td>
									    <td align="center">&nbsp;</td>
									    <td align="center"><input type="submit" name="update" id="update" value="UPDATE RESULT"></td>
								      </tr>
								    </table></td>
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