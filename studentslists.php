<?php
session_start();
include('data.php');
$msg = '';
$classdisplay = '';
		
		
		
		
		if(isset($_GET['term']) && isset($_GET['class']) && isset($_GET['sessions'])){
			
			
				$term = $_GET['term'];
				$class = $_GET['class'];
				$sessions = $_GET['sessions'];
				
				$classSubString = substr($class,0,3);
				
				if($classSubString == 'JSS'){
					
						
				$sql = "SELECT * FROM jstudentsexamsrecordtb WHERE classes = '$class' AND term = '$term' AND sessions = '$sessions'";
				$query = mysqli_query($link,$sql) or die(mysqli_error($link));
				$rowValue = mysqli_fetch_assoc($query);
				$rowNumber = mysqli_num_rows($query);
		
					if($rowNumber > 0){
			
			
						$sqlsl = "SELECT * FROM jstudentsexamsrecordtb WHERE classes = '$class' AND term = '$term' AND sessions = '$sessions'";
						$querysl = mysqli_query($link,$sqlsl) or die(mysqli_error($link));
						$rowValuesl = mysqli_fetch_assoc($querysl);
			
					}
			
					else{
				
						$msg = 'Invalid Class Selected';
						//header('Location: reg.php');
					}
					
					
					}
				
			else if($classSubString == 'SSS'){
						
						
						
						
						}
					
			
			}
		
?>
<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang="zxx"> <!--<![endif]-->


<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Anglican College Owerrinta</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/prettyPhoto.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/owl.theme.default.css">
	<link rel="stylesheet" href="css/transitions.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/color.css">
	<link rel="stylesheet" href="css/responsive.css">
	<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body class="tg-home tg-homeone">
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!--************************************
			Wrapper Start
	*************************************-->
	<div id="tg-wrapper" class="tg-wrapper">
		<!--************************************
				Header Start
		*************************************-->
		<header id="tg-header" class="tg-header tg-haslayout">
			<div class="tg-topbar">
				<div class="tg-leftbox">
					<span id="tg-datebox" class="tg-datebox"></span>
					<span class="tg-rtltextbox"><em>DIOCESE OF ISIALA NGWA SOUTH</em></span>
				</div>
				<div class="tg-rightbox">
					<span class="tg-tollfree">Tel: 09065483663</span>
					<div class="tg-themedropdown tg-languagesdropdown">
						<a href="javascript:void(0);" id="tg-languages" class="tg-btndropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span><img src="images/flags/img-01.jpg" alt="image description"></span>
							<span>Eng</span>
						</a>
						<div class="tg-themedropdownbox" aria-labelledby="tg-languages">
							<ul class="tg-languageslist">
								<li>
									<span><img src="images/flags/img-02.jpg" alt="image description"></span>
									<span>Eng</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="tg-logoandnoticeboard">
							<strong class="tg-logo"><a href="index.php"><img src="images/logo.png" alt="University of Education and knowledge"></a></strong>
							<div class="tg-noticeboard hidden-xs">
								<div class="tg-textbox">
									<span>ANGLICAN COMMUNION</span>
									<span>DIOCESE OF ISIALA NGWA SOUTH</span>
								</div>
								<figure><img src="images/img-01.jpg" alt="image description"></figure>
							</div>
						</div>
						<div class="tg-navigationarea">
							<nav id="tg-nav" class="tg-nav">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								<div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
									<ul>
										<li><a href="index.php">Home</a></li>
										<li><a href="about.php">Our History</a></li>
										<li class="current-menu-item"><a data-new="new" href="resultchecker.php">E-Results</a></li>
                                        <li><a href="assignments.php">Assigments</a></li>
										<li class="menu-item-has-children">
											<a href="javascript:void(0);">Admissions</a>
											<ul class="sub-menu">
												<li><a href="admissionscal.php">Admissions Calendar</a></li>
												<li><a href="admissionsrequirements.php">Admission Requirments</a></li>
											</ul>
										</li>
										<li class="menu-item-has-children">
											<a href="javascript:void(0);">Events</a>
											<ul class="sub-menu">
												<li><a href="newsbulletin.php">News Bulletin</a></li>
												<li><a href="photogallery.php">Photo Gallery</a></li>
											</ul>
										</li>
										<li><a href="contactusvone.html">Contact Us</a></li>
										
									</ul>
								</div>
							</nav>
							<div class="tg-searchbox">
								<a id="tg-btnsearch" class="tg-btnsearch" href="javascript:void(0);"><i class="icon-magnifier"></i></a>
								<form class="tg-formtheme tg-formsearch">
									<fieldset><input type="search" name="search" class="form-control" placeholder="Start Your Search Here"></fieldset>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!--************************************
				Header End
		*************************************-->
		<!--************************************
				Inner Banner Start
		*************************************-->
		<div class="tg-innerbanner">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<ol class="tg-breadcrumb">
							<li><a href="javascript:void(0);">home</a></li>
							<li class="tg-active">Select Class</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<!--************************************
				Inner Banner End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<div class="container">
				<div class="row">
					<div id="tg-twocolumns" class="tg-twocolumns">
						<div class="col-xs-12 col-sm-8 col-md-9 col-lg-9 pull-right">
							<div id="tg-content" class="tg-content">
								<div class="tg-results">
									<div class="tg-pagetitle">
										<h2>Select Class</h2>
									</div>
									<div class="tg-resultcategory">
										<ul class="tg-downloadlist">
                                        <?php do{ ?>
											<li>
												<div class="tg-result">
													<span class="tg-counting">1</span>
													<a class="tg-btndownloadresult" href="index.php">
														<em>download</em>
														<i class="icon-download"></i>
													</a>
													<div class="tg-description"><p><a href="index.php?term='.$term.'&sessions='.$sessions.'&class=JSS1 A">JSS 1A</a></p></div>
												</div>
											</li>
											
										<?php } while($rowValuesl = mysqli_fetch_assoc($querysl)); ?>
											
											
										
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 pull-left">
							<aside id="tg-sidebar" class="tg-sidebar">
								<div class="tg-widget tg-widgetsearchcourse">
									<div class="tg-widgettitle">
										<h3>Search Result</h3>
									</div>
									<div class="tg-widgetcontent">
										<form class="tg-formtheme tg-formsearchcourse" action="" method="post">
											<fieldset><font color="#990000"><?php echo $msg; ?></font>
												<div class="tg-inputwithicon">
													<i class="icon-calendar-full"></i>
													<span class="tg-select">
														<select name="sessions">
															<option value="">Select Session*</option>
															<option value="2017/2018">2017/2018</option>
															<option value="2018/2019">2018/2019</option>
															<option value="2019/2020">2019/2020</option>
															<option value="2020/2021">2020/2021</option>
															<option value="2021/2022">2021/2022</option>
														</select>
													</span>
												</div>
												<div class="tg-inputwithicon">
													<i class="icon-inbox"></i>
													<span class="tg-select">
														<select name="term">
															<option value="">Select Term*</option>
															<option value="First Term">First Term</option>
															<option value="Second Term">Second Term</option>
															<option value="Third Term">Third Term</option>
														</select>
													</span>
												</div>
												<div class="tg-inputwithicon">
													<i class="icon-file-empty"></i>
													<span class="tg-select">
														<select name="level">
															<option value="">Select Level*</option>
															<option value="JSS 1">JSS 1</option>
															<option value="JSS 2">JSS 2</option>
															<option value="JSS 3">JSS 3</option>
															<option value="SSS 1">SSS 1</option>
															<option value="SSS 2">SSS 2</option>
                                                            <option value="SSS 3">SSS 3</option>
														</select>
													</span>
												</div>
												<button type="submit" class="tg-btn">Check Result</button>
											</fieldset>
										</form>
									</div>
								</div>
								
							</aside>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!--************************************
				Main End
		*************************************-->
		<!--************************************
				Footer Start
		*************************************-->
		<footer id="tg-footer" class="tg-footer tg-haslayout">
			<div class="tg-signupbox">
				<div class="container">
					<div class="tg-signuptextbox">
						<h3>Free Signup!</h3>
						<div class="tg-description"><p>Subscribe Monthly Newsletter &amp; Get Latest New &amp; Updates.</p></div>
					</div>
					<form class="tg-formtheme tg-formsignupfree">
						<fieldset>
							<div class="form-group"><input type="text" name="emailid" class="form-control" placeholder="Enter Email ID"></div>
							<div class="form-group"><button type="submit" class="tg-btn">Signup Now</button></div>
						</fieldset>
					</form>
				</div>
			</div>
			<div class="tg-footermiddlebar">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
							<div class="tg-widget tg-widgetcompanyinfo">
								<div class="tg-widgetcontent">
									<strong class="tg-logo"><a href="index.php"><img src="images/logo2.png" alt="image description"></a></strong>
									<div class="tg-description">
										<p>Started in 1961 as Anglican Girls Secondary School Owerrinta, then after the civil war in 1971, the government took it over and renamed it Girls Secondary School.<br><a href="about.php">Read More</a></p>
									</div>
									<ul class="tg-infolist">
										<li>
											<i class="icon-location"></i>
											<address>P.O. Box 15 Owerrinta - Abia State</address>
										</li>
										<li>
											<i class="icon-phone-handset"></i>
											<span>08067251950, 09065483663</span>
										</li>
										<li>
											<a href="mailto:angcolog@yahoo.com">
												<i class="icon-envelope"></i>
												<span>angcolog@yahoo.com</span>
											</a>
										</li>
                                        <li>
											<a href="mailto:angcolog@gmail.com">
												<i class="icon-envelope"></i>
												<span>angcolog@gmail.com</span>
											</a>
										</li>
									</ul>
									<ul class="tg-socialicons">
										<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
										<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
										
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
							
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
							<div class="tg-widget tg-widgetcoursecategories">
								<div class="tg-widgettitle">
									<h3>Navigation Links</h3>
								</div>
								<div class="tg-widgetcontent">
									<ul>
										<li><a href="javascript:void(0);">Our History</a></li>
										<li><a href="javascript:void(0);">Assignments</a></li>
										<li><a href="javascript:void(0);">E-Result</a></li>
										<li><a href="javascript:void(0);">Admissions</a></li>
										<li><a href="javascript:void(0);">News Bulletin</a></li>
										<li><a href="javascript:void(0);">Contact Us</a></li>
									</ul>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<div class="tg-footerbar">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<span class="tg-copyright">Copyright &copy; 2017 All Rights Reserved</span>
							<nav class="tg-addnav">
								<ul>
									<li><a href="javascript:void(0);">Privacy Policy</a></li>
									<li><a href="javascript:void(0);">Term and Conditions</a></li>
									<li><a href="javascript:void(0);">Contact</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!--************************************
				Footer End
		*************************************-->
	</div>
	<!--************************************
			Wrapper End
	*************************************-->
	<script src="js/vendor/jquery-library.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/mapclustering/data.json"></script>
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en"></script>
	<script src="js/mapclustering/markerclusterer.min.js"></script>
	<script src="js/mapclustering/infobox.js"></script>
	<script src="js/mapclustering/map.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/isotope.pkgd.js"></script>
	<script src="js/prettyPhoto.js"></script>
	<script src="js/countdown.js"></script>
	<script src="js/collapse.js"></script>
	<script src="js/moment.js"></script>
	<script src="js/gmap3.js"></script>
	<script src="js/main.js"></script>
</body>

</html>