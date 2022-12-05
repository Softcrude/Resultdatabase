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
	
///////////////////////////////////////////////Get
	if(isset($_GET['sname']) && isset($_GET['class']) && isset($_GET['sessions']) && isset($_GET['term'])){
		
		
		$studentname = $_GET['sname'];
		$classes = $_GET['class'];
		$sessions = $_GET['sessions'];
		$term = $_GET['term'];
		
		
		$sqlenglish = "SELECT * FROM senglish WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		$queryenglish = mysqli_query($link,$sqlenglish) or die(mysqli_error($link));
		$rowValueenglish = mysqli_fetch_assoc($queryenglish);
		
	
		$sqlmaths = "SELECT * FROM smaths WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		$querymaths = mysqli_query($link,$sqlmaths) or die(mysqli_error($link));
		$rowValuemaths = mysqli_fetch_assoc($querymaths);
		
		
		$sqlagric = "SELECT * FROM sagric WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		$queryagric = mysqli_query($link,$sqlagric) or die(mysqli_error($link));
		$rowValueagric = mysqli_fetch_assoc($queryagric);
		
		
		$sqlacct = "SELECT * FROM saccounting WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		$queryacct = mysqli_query($link,$sqlacct) or die(mysqli_error($link));
		$rowValueacct = mysqli_fetch_assoc($queryacct);
		
		
		$sqligbo = "SELECT * FROM sigbo WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		$queryigbo = mysqli_query($link,$sqligbo) or die(mysqli_error($link));
		$rowValueigbo = mysqli_fetch_assoc($queryigbo);
		
		
		$sqlcomputer = "SELECT * FROM scomputer WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		$querycomputer = mysqli_query($link,$sqlcomputer) or die(mysqli_error($link));
		$rowValuecomputer = mysqli_fetch_assoc($querycomputer);
		
		$sqlfishery = "SELECT * FROM sfishery WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		$queryfishery = mysqli_query($link,$sqlfishery) or die(mysqli_error($link));
		$rowValuefishery = mysqli_fetch_assoc($queryfishery);
		
		
		$sqlphy = "SELECT * FROM sphysics WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		$queryphy = mysqli_query($link,$sqlphy) or die(mysqli_error($link));
		$rowValuephy = mysqli_fetch_assoc($queryphy);
		
		
		$sqlchem = "SELECT * FROM schemistry WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		$querychem = mysqli_query($link,$sqlchem) or die(mysqli_error($link));
		$rowValuechem = mysqli_fetch_assoc($querychem);
		
		
		$sqlliterature = "SELECT * FROM sliterature WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		$queryliterature = mysqli_query($link,$sqlliterature) or die(mysqli_error($link));
		$rowValueliterature = mysqli_fetch_assoc($queryliterature);
		
		
		$sqlbio = "SELECT * FROM sbiology WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		$querybio = mysqli_query($link,$sqlbio) or die(mysqli_error($link));
		$rowValuebio = mysqli_fetch_assoc($querybio);
		
		
		$sqlecons = "SELECT * FROM seconomics WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		$queryecons = mysqli_query($link,$sqlecons) or die(mysqli_error($link));
		$rowValueecons = mysqli_fetch_assoc($queryecons);
		
		
		$sqlcrs = "SELECT * FROM scrs WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		$querycrs = mysqli_query($link,$sqlcrs) or die(mysqli_error($link));
		$rowValuecrs = mysqli_fetch_assoc($querycrs);
		
		
		
		$sqlgovt = "SELECT * FROM sgovernment WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		$querygovt = mysqli_query($link,$sqlgovt) or die(mysqli_error($link));
		$rowValuegovt = mysqli_fetch_assoc($querygovt);
		
		
		$sqlfnut = "SELECT * FROM sfoodnut WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		$queryfnut = mysqli_query($link,$sqlfnut) or die(mysqli_error($link));
		$rowValuefnut = mysqli_fetch_assoc($queryfnut);
		
		
		$sqlcivic = "SELECT * FROM scivicedu WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		$querycivic = mysqli_query($link,$sqlcivic) or die(mysqli_error($link));
		$rowValuecivic = mysqli_fetch_assoc($querycivic);
		
		
		$sqlgeo = "SELECT * FROM sgeography WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		$querygeo = mysqli_query($link,$sqlgeo) or die(mysqli_error($link));
		$rowValuegeo = mysqli_fetch_assoc($querygeo);
		
		$sqlanihus = "SELECT * FROM sanimalhus WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		$queryanihus = mysqli_query($link,$sqlanihus) or die(mysqli_error($link));
		$rowValueanihus = mysqli_fetch_assoc($queryanihus);
		
		$sqlmusic = "SELECT * FROM smusic WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		$querymusic = mysqli_query($link,$sqlmusic) or die(mysqli_error($link));
		$rowValuemusic = mysqli_fetch_assoc($querymusic);
		
		
		}
		
		
		
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
		
		
		////////////////Accounting
		$acctCA = mysqli_real_escape_string($link,trim($_POST['acctCA']));
		$acctExam = mysqli_real_escape_string($link,trim($_POST['acctExam']));
		$acctTotal = mysqli_real_escape_string($link,trim($_POST['acctTotal']));
		$acctGrade = mysqli_real_escape_string($link,trim($_POST['acctGrade']));
		
		////////////////Igbo
		$igboCA = mysqli_real_escape_string($link,trim($_POST['igboCA']));
		$igboExam = mysqli_real_escape_string($link,trim($_POST['igboExam']));
		$igboTotal = mysqli_real_escape_string($link,trim($_POST['igboTotal']));
		$igboGrade = mysqli_real_escape_string($link,trim($_POST['igboGrade']));
		
		////////////////Computer Std
		$compCA = mysqli_real_escape_string($link,trim($_POST['compCA']));
		$compExam = mysqli_real_escape_string($link,trim($_POST['compExam']));
		$compTotal = mysqli_real_escape_string($link,trim($_POST['compTotal']));
		$compGrade = mysqli_real_escape_string($link,trim($_POST['compGrade']));
		
		////////////////Agric Science
		$agricCA = mysqli_real_escape_string($link,trim($_POST['agricCA']));
		$agricExam = mysqli_real_escape_string($link,trim($_POST['agricExam']));
		$agricTotal = mysqli_real_escape_string($link,trim($_POST['agricTotal']));
		$agricGrade = mysqli_real_escape_string($link,trim($_POST['agricGrade']));
		
		////////////////Fishery
		$fisheryCA = mysqli_real_escape_string($link,trim($_POST['fisheryCA']));
		$fisheryExam = mysqli_real_escape_string($link,trim($_POST['fisheryExam']));
		$fisheryTotal = mysqli_real_escape_string($link,trim($_POST['fisheryTotal']));
		$fisheryGrade = mysqli_real_escape_string($link,trim($_POST['fisheryGrade']));
		
		
		////////////////Physics
		$phyCA = mysqli_real_escape_string($link,trim($_POST['phyCA']));
		$phyExam = mysqli_real_escape_string($link,trim($_POST['phyExam']));
		$phyTotal = mysqli_real_escape_string($link,trim($_POST['phyTotal']));
		$phyGrade = mysqli_real_escape_string($link,trim($_POST['phyGrade']));
		
		
		////////////////Chem
		$chemCA = mysqli_real_escape_string($link,trim($_POST['chemCA']));
		$chemExam = mysqli_real_escape_string($link,trim($_POST['chemExam']));
		$chemTotal = mysqli_real_escape_string($link,trim($_POST['chemTotal']));
		$chemGrade = mysqli_real_escape_string($link,trim($_POST['chemGrade']));
		
		
		////////////////Literature
		$literatureCA = mysqli_real_escape_string($link,trim($_POST['literatureCA']));
		$literatureExam = mysqli_real_escape_string($link,trim($_POST['literatureExam']));
		$literatureTotal = mysqli_real_escape_string($link,trim($_POST['literatureTotal']));
		$literatureGrade = mysqli_real_escape_string($link,trim($_POST['literatureGrade']));
		
		
		////////////////Biology.
		$bioCA = mysqli_real_escape_string($link,trim($_POST['bioCA']));
		$bioExam = mysqli_real_escape_string($link,trim($_POST['bioExam']));
		$bioTotal = mysqli_real_escape_string($link,trim($_POST['bioTotal']));
		$bioGrade = mysqli_real_escape_string($link,trim($_POST['bioGrade']));
		
		
		////////////////Economics.
		$econsCA = mysqli_real_escape_string($link,trim($_POST['econsCA']));
		$econsExam = mysqli_real_escape_string($link,trim($_POST['econsExam']));
		$econsTotal = mysqli_real_escape_string($link,trim($_POST['econsTotal']));
		$econsGrade = mysqli_real_escape_string($link,trim($_POST['econsGrade']));
		
		
		////////////////CRS.
		$crsCA = mysqli_real_escape_string($link,trim($_POST['crsCA']));
		$crsExam = mysqli_real_escape_string($link,trim($_POST['crsExam']));
		$crsTotal = mysqli_real_escape_string($link,trim($_POST['crsTotal']));
		$crsGrade = mysqli_real_escape_string($link,trim($_POST['crsGrade']));
		
		
		////////////////Govt.
		$govtCA = mysqli_real_escape_string($link,trim($_POST['govtCA']));
		$govtExam = mysqli_real_escape_string($link,trim($_POST['govtExam']));
		$govtTotal = mysqli_real_escape_string($link,trim($_POST['govtTotal']));
		$govtGrade = mysqli_real_escape_string($link,trim($_POST['govtGrade']));
		
		
		////////////////fnut.
		$fnutCA = mysqli_real_escape_string($link,trim($_POST['fnutCA']));
		$fnutExam = mysqli_real_escape_string($link,trim($_POST['fnutExam']));
		$fnutTotal = mysqli_real_escape_string($link,trim($_POST['fnutTotal']));
		$fnutGrade = mysqli_real_escape_string($link,trim($_POST['fnutGrade']));
		
		
		////////////////Civic Edu.
		$civicCA = mysqli_real_escape_string($link,trim($_POST['civicCA']));
		$civicExam = mysqli_real_escape_string($link,trim($_POST['civicExam']));
		$civicTotal = mysqli_real_escape_string($link,trim($_POST['civicTotal']));
		$civicGrade = mysqli_real_escape_string($link,trim($_POST['civicGrade']));
		
		
		////////////////GEO.
		$geoCA = mysqli_real_escape_string($link,trim($_POST['geoCA']));
		$geoExam = mysqli_real_escape_string($link,trim($_POST['geoExam']));
		$geoTotal = mysqli_real_escape_string($link,trim($_POST['geoTotal']));
		$geoGrade = mysqli_real_escape_string($link,trim($_POST['geoGrade']));
		
		////////////////Animal Hus.
		$anihusCA = mysqli_real_escape_string($link,trim($_POST['anihusCA']));
		$anihusExam = mysqli_real_escape_string($link,trim($_POST['anihusExam']));
		$anihusTotal = mysqli_real_escape_string($link,trim($_POST['anihusTotal']));
		$anihusGrade = mysqli_real_escape_string($link,trim($_POST['anihusGrade']));
		
		
		////////////////Music.
		$musicCA = mysqli_real_escape_string($link,trim($_POST['musicCA']));
		$musicExam = mysqli_real_escape_string($link,trim($_POST['musicExam']));
		$musicTotal = mysqli_real_escape_string($link,trim($_POST['musicTotal']));
		$musicGrade = mysqli_real_escape_string($link,trim($_POST['musicGrade']));
		
	
		$zero = 0;
		$nograde = '';
		$sqlenglish = "UPDATE senglish  SET cascore = '$engCA', examscore = '$engExam',  totalscore = '$engTotal',  grade = '$engGrade' WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		mysqli_query($link,$sqlenglish) or die(mysqli_error($link));
	
		$sqlmaths = "UPDATE smaths  SET cascore = '$mathsCA', examscore = '$mathsExam',  totalscore = '$mathsTotal',  grade = '$mathsGrade' WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		mysqli_query($link,$sqlmaths) or die(mysqli_error($link));
		
		
		$sqlacct = "UPDATE saccounting  SET cascore = '$acctCA', examscore = '$acctExam',  totalscore = '$acctTotal',  grade = '$acctGrade' WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		mysqli_query($link,$sqlacct) or die(mysqli_error($link));
		
		
		$sqligbo = "UPDATE sigbo  SET cascore = '$igboCA', examscore = '$igboExam',  totalscore = '$igboTotal',  grade = '$igboGrade' WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		mysqli_query($link,$sqligbo) or die(mysqli_error($link));
		
		
		$sqlcomp = "UPDATE scomputer  SET cascore = '$compCA', examscore = '$compExam',  totalscore = '$compTotal',  grade = '$compGrade' WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		mysqli_query($link,$sqlcomp) or die(mysqli_error($link));
		
		
		$sqlagric = "UPDATE sagric  SET cascore = '$agricCA', examscore = '$agricExam',  totalscore = '$agricTotal',  grade = '$agricGrade' WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		mysqli_query($link,$sqlagric) or die(mysqli_error($link));
		
		
		$sqlfishery = "UPDATE sfishery  SET cascore = '$fisheryCA', examscore = '$fisheryExam',  totalscore = '$fisheryTotal',  grade = '$fisheryGrade' WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		mysqli_query($link,$sqlfishery) or die(mysqli_error($link));
		
		
		$sqlphy = "UPDATE sphysics  SET cascore = '$phyCA', examscore = '$phyExam',  totalscore = '$phyTotal',  grade = '$phyGrade' WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		mysqli_query($link,$sqlphy) or die(mysqli_error($link));
		
		
		$sqlchem = "UPDATE schemistry  SET cascore = '$chemCA', examscore = '$chemExam',  totalscore = '$chemTotal',  grade = '$chemGrade' WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		mysqli_query($link,$sqlchem) or die(mysqli_error($link));
		
		
		$sqlliterature = "UPDATE sliterature  SET cascore = '$literatureCA', examscore = '$literatureExam',  totalscore = '$literatureTotal',  grade = '$literatureGrade' WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		mysqli_query($link,$sqlliterature) or die(mysqli_error($link));
		
		
		$sqlbio = "UPDATE sbiology  SET cascore = '$bioCA', examscore = '$bioExam',  totalscore = '$bioTotal',  grade = '$bioGrade' WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		mysqli_query($link,$sqlbio) or die(mysqli_error($link));
		
		
		$sqlecons = "UPDATE seconomics  SET cascore = '$econsCA', examscore = '$econsExam',  totalscore = '$econsTotal',  grade = '$econsGrade' WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		mysqli_query($link,$sqlecons) or die(mysqli_error($link));
		
		
		$sqlcrs = "UPDATE scrs  SET cascore = '$crsCA', examscore = '$crsExam',  totalscore = '$crsTotal',  grade = '$crsGrade' WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		mysqli_query($link,$sqlcrs) or die(mysqli_error($link));
		
		
		$sqlgovt = "UPDATE sgovernment  SET cascore = '$govtCA', examscore = '$govtExam',  totalscore = '$govtTotal',  grade = '$govtGrade' WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		mysqli_query($link,$sqlgovt) or die(mysqli_error($link));
		
		
		$sqlfnut = "UPDATE sfoodnut  SET cascore = '$fnutCA', examscore = '$fnutExam',  totalscore = '$fnutTotal',  grade = '$fnutGrade' WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		mysqli_query($link,$sqlfnut) or die(mysqli_error($link));
		
		
		$sqlcivic = "UPDATE scivicedu  SET cascore = '$civicCA', examscore = '$civicExam',  totalscore = '$civicTotal',  grade = '$civicGrade' WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		mysqli_query($link,$sqlcivic) or die(mysqli_error($link));
		
		
		$sqlgeo = "UPDATE sgeography  SET cascore = '$geoCA', examscore = '$geoExam',  totalscore = '$geoTotal',  grade = '$geoGrade' WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		mysqli_query($link,$sqlgeo) or die(mysqli_error($link));
		
		$sqlanihus = "UPDATE sanimalhus  SET cascore = '$anihusCA', examscore = '$anihusExam',  totalscore = '$anihusTotal',  grade = '$anihusGrade' WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		mysqli_query($link,$sqlanihus) or die(mysqli_error($link));
		
		
		$sqlmusic = "UPDATE smusic  SET cascore = '$musicCA', examscore = '$musicExam',  totalscore = '$musicTotal',  grade = '$musicGrade' WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		mysqli_query($link,$sqlmusic) or die(mysqli_error($link));
		
		
			
			$_SESSION['class'] = $classes;
			$_SESSION['sessions'] = $sessions;
			$_SESSION['term'] = $term;
			
			header("Location:ssuccess.php");
	
		
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
    
  <script src="assets/js/jquery.min.js"></script>
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
  
  <script type="text/javascript">
  
  //Acct
    $(document).ready(function () {
      //iterate through each textboxes
      $('.txtMarksACCT').each(function () {
        
        // call 'calcSumAndAverage' method on keyup handler.
        $(this).keyup(function () {
          calcSumAndAveragemAcct();
        });
      });
    });
    
    function calcSumAndAveragemAcct() {
      var total = 0;
      var average = 0;
      
      //iterate through each textboxes with class name '.txtMarks' 
      //and add the values.
      $('.txtMarksACCT').each(function () {
        
        //add only if the value is number
        if (!isNaN(this.value) && this.value.length != 0) {
          total += parseFloat(this.value);
        }
      });
      
      //Calculate the Average
      if (!isNaN(total) && total != 0) {
        
        //Get count of textboxes with class '.txtMarks'
        var txtboxes = $('.txtMarksACCT').length;
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
	  
	  document.getElementById("acctTotal").value = total;
      // Show Average upto 2 decimal places using .toFixed() method.
      //$('#average').html(average.toFixed(2));
	  document.getElementById("acctGrade").value = h;
    }
  </script>
  
  
   <script type="text/javascript">
  
  //Agric
    $(document).ready(function () {
      //iterate through each textboxes
      $('.txtMarksAgric').each(function () {
        
        // call 'calcSumAndAverage' method on keyup handler.
        $(this).keyup(function () {
          calcSumAndAveragemAgric();
        });
      });
    });
    
    function calcSumAndAveragemAgric() {
      var total = 0;
      var average = 0;
      
      //iterate through each textboxes with class name '.txtMarks' 
      //and add the values.
      $('.txtMarksAgric').each(function () {
        
        //add only if the value is number
        if (!isNaN(this.value) && this.value.length != 0) {
          total += parseFloat(this.value);
        }
      });
      
      //Calculate the Average
      if (!isNaN(total) && total != 0) {
        
        //Get count of textboxes with class '.txtMarks'
        var txtboxes = $('.txtMarksAgric').length;
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
	  
	  document.getElementById("agricTotal").value = total;
      // Show Average upto 2 decimal places using .toFixed() method.
      //$('#average').html(average.toFixed(2));
	  document.getElementById("agricGrade").value = h;
    }
  </script>
  
    
  
    <script type="text/javascript">
  
  //Igbo
    $(document).ready(function () {
      //iterate through each textboxes
      $('.txtMarksIgbo').each(function () {
        
        // call 'calcSumAndAverage' method on keyup handler.
        $(this).keyup(function () {
          calcSumAndAveragemIgbo();
        });
      });
    });
    
    function calcSumAndAveragemIgbo() {
      var total = 0;
      var average = 0;
      
      //iterate through each textboxes with class name '.txtMarks' 
      //and add the values.
      $('.txtMarksIgbo').each(function () {
        
        //add only if the value is number
        if (!isNaN(this.value) && this.value.length != 0) {
          total += parseFloat(this.value);
        }
      });
      
      //Calculate the Average
      if (!isNaN(total) && total != 0) {
        
        //Get count of textboxes with class '.txtMarks'
        var txtboxes = $('.txtMarksIgbo').length;
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
	  
	  document.getElementById("igboTotal").value = total;
      // Show Average upto 2 decimal places using .toFixed() method.
      //$('#average').html(average.toFixed(2));
	  document.getElementById("igboGrade").value = h;
    }
  </script>
  
  
  
  <script type="text/javascript">
  
  //Computer Studies
    $(document).ready(function () {
      //iterate through each textboxes
      $('.txtMarksComp').each(function () {
        
        // call 'calcSumAndAverage' method on keyup handler.
        $(this).keyup(function () {
          calcSumAndAveragemComp();
        });
      });
    });
    
    function calcSumAndAveragemComp() {
      var total = 0;
      var average = 0;
      
      //iterate through each textboxes with class name '.txtMarks' 
      //and add the values.
      $('.txtMarksComp').each(function () {
        
        //add only if the value is number
        if (!isNaN(this.value) && this.value.length != 0) {
          total += parseFloat(this.value);
        }
      });
      
      //Calculate the Average
      if (!isNaN(total) && total != 0) {
        
        //Get count of textboxes with class '.txtMarks'
        var txtboxes = $('.txtMarksComp').length;
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
	  
	  document.getElementById("compTotal").value = total;
      // Show Average upto 2 decimal places using .toFixed() method.
      //$('#average').html(average.toFixed(2));
	  document.getElementById("compGrade").value = h;
    }
  </script>
  
  
   <script type="text/javascript">
  
  //Fishery
    $(document).ready(function () {
      //iterate through each textboxes
      $('.txtMarksFishery').each(function () {
        
        // call 'calcSumAndAverage' method on keyup handler.
        $(this).keyup(function () {
          calcSumAndAveragemFishery();
        });
      });
    });
    
    function calcSumAndAveragemFishery() {
      var total = 0;
      var average = 0;
      
      //iterate through each textboxes with class name '.txtMarks' 
      //and add the values.
      $('.txtMarksFishery').each(function () {
        
        //add only if the value is number
        if (!isNaN(this.value) && this.value.length != 0) {
          total += parseFloat(this.value);
        }
      });
      
      //Calculate the Average
      if (!isNaN(total) && total != 0) {
        
        //Get count of textboxes with class '.txtMarks'
        var txtboxes = $('.txtMarksFishery').length;
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
	  
	  document.getElementById("fisheryTotal").value = total;
      // Show Average upto 2 decimal places using .toFixed() method.
      //$('#average').html(average.toFixed(2));
	  document.getElementById("fisheryGrade").value = h;
    }
  </script>
  
  
     <script type="text/javascript">
  
  //Physics
    $(document).ready(function () {
      //iterate through each textboxes
      $('.txtMarksPHY').each(function () {
        
        // call 'calcSumAndAverage' method on keyup handler.
        $(this).keyup(function () {
          calcSumAndAveragemPhysics();
        });
      });
    });
    
    function calcSumAndAveragemPhysics() {
      var total = 0;
      var average = 0;
      
      //iterate through each textboxes with class name '.txtMarks' 
      //and add the values.
      $('.txtMarksPHY').each(function () {
        
        //add only if the value is number
        if (!isNaN(this.value) && this.value.length != 0) {
          total += parseFloat(this.value);
        }
      });
      
      //Calculate the Average
      if (!isNaN(total) && total != 0) {
        
        //Get count of textboxes with class '.txtMarks'
        var txtboxes = $('.txtMarksPHY').length;
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
	  
	  document.getElementById("phyTotal").value = total;
      // Show Average upto 2 decimal places using .toFixed() method.
      //$('#average').html(average.toFixed(2));
	  document.getElementById("phyGrade").value = h;
    }
  </script>
  
  <script type="text/javascript">
  
  //Chem
    $(document).ready(function () {
      //iterate through each textboxes
      $('.txtMarksCHEM').each(function () {
        
        // call 'calcSumAndAverage' method on keyup handler.
        $(this).keyup(function () {
          calcSumAndAveragemChem();
        });
      });
    });
    
    function calcSumAndAveragemChem() {
      var total = 0;
      var average = 0;
      
      //iterate through each textboxes with class name '.txtMarks' 
      //and add the values.
      $('.txtMarksCHEM').each(function () {
        
        //add only if the value is number
        if (!isNaN(this.value) && this.value.length != 0) {
          total += parseFloat(this.value);
        }
      });
      
      //Calculate the Average
      if (!isNaN(total) && total != 0) {
        
        //Get count of textboxes with class '.txtMarks'
        var txtboxes = $('.txtMarksCHEM').length;
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
	  
	  document.getElementById("chemTotal").value = total;
      // Show Average upto 2 decimal places using .toFixed() method.
      //$('#average').html(average.toFixed(2));
	  document.getElementById("chemGrade").value = h;
    }
  </script>
  
  
  
    <script type="text/javascript">
  
  //Literature
    $(document).ready(function () {
      //iterate through each textboxes
      $('.txtMarksLiterature').each(function () {
        
        // call 'calcSumAndAverage' method on keyup handler.
        $(this).keyup(function () {
          calcSumAndAveragemLiterature();
        });
      });
    });
    
    function calcSumAndAveragemLiterature() {
      var total = 0;
      var average = 0;
      
      //iterate through each textboxes with class name '.txtMarks' 
      //and add the values.
      $('.txtMarksLiterature').each(function () {
        
        //add only if the value is number
        if (!isNaN(this.value) && this.value.length != 0) {
          total += parseFloat(this.value);
        }
      });
      
      //Calculate the Average
      if (!isNaN(total) && total != 0) {
        
        //Get count of textboxes with class '.txtMarks'
        var txtboxes = $('.txtMarksLiterature').length;
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
	  
	  document.getElementById("literatureTotal").value = total;
      // Show Average upto 2 decimal places using .toFixed() method.
      //$('#average').html(average.toFixed(2));
	  document.getElementById("literatureGrade").value = h;
    }
  </script>
  
  
      <script type="text/javascript">
  
  //Biology
    $(document).ready(function () {
      //iterate through each textboxes
      $('.txtMarksBIO').each(function () {
        
        // call 'calcSumAndAverage' method on keyup handler.
        $(this).keyup(function () {
          calcSumAndAveragemBio();
        });
      });
    });
    
    function calcSumAndAveragemBio() {
      var total = 0;
      var average = 0;
      
      //iterate through each textboxes with class name '.txtMarks' 
      //and add the values.
      $('.txtMarksBIO').each(function () {
        
        //add only if the value is number
        if (!isNaN(this.value) && this.value.length != 0) {
          total += parseFloat(this.value);
        }
      });
      
      //Calculate the Average
      if (!isNaN(total) && total != 0) {
        
        //Get count of textboxes with class '.txtMarks'
        var txtboxes = $('.txtMarksBIO').length;
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
	  
	  document.getElementById("bioTotal").value = total;
      // Show Average upto 2 decimal places using .toFixed() method.
      //$('#average').html(average.toFixed(2));
	  document.getElementById("bioGrade").value = h;
    }
  </script>
  
  
  <script type="text/javascript">
  
  //Economics
    $(document).ready(function () {
      //iterate through each textboxes
      $('.txtMarksEcons').each(function () {
        
        // call 'calcSumAndAverage' method on keyup handler.
        $(this).keyup(function () {
          calcSumAndAveragemEcons();
        });
      });
    });
    
    function calcSumAndAveragemEcons() {
      var total = 0;
      var average = 0;
      
      //iterate through each textboxes with class name '.txtMarks' 
      //and add the values.
      $('.txtMarksEcons').each(function () {
        
        //add only if the value is number
        if (!isNaN(this.value) && this.value.length != 0) {
          total += parseFloat(this.value);
        }
      });
      
      //Calculate the Average
      if (!isNaN(total) && total != 0) {
        
        //Get count of textboxes with class '.txtMarks'
        var txtboxes = $('.txtMarksEcons').length;
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
	  
	  document.getElementById("econsTotal").value = total;
      // Show Average upto 2 decimal places using .toFixed() method.
      //$('#average').html(average.toFixed(2));
	  document.getElementById("econsGrade").value = h;
    }
  </script>
  
  
    <script type="text/javascript">
  
  //CRS
    $(document).ready(function () {
      //iterate through each textboxes
      $('.txtMarksCRS').each(function () {
        
        // call 'calcSumAndAverage' method on keyup handler.
        $(this).keyup(function () {
          calcSumAndAveragemCRS();
        });
      });
    });
    
    function calcSumAndAveragemCRS() {
      var total = 0;
      var average = 0;
      
      //iterate through each textboxes with class name '.txtMarks' 
      //and add the values.
      $('.txtMarksCRS').each(function () {
        
        //add only if the value is number
        if (!isNaN(this.value) && this.value.length != 0) {
          total += parseFloat(this.value);
        }
      });
      
      //Calculate the Average
      if (!isNaN(total) && total != 0) {
        
        //Get count of textboxes with class '.txtMarks'
        var txtboxes = $('.txtMarksCRS').length;
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
	  
	  document.getElementById("crsTotal").value = total;
      // Show Average upto 2 decimal places using .toFixed() method.
      //$('#average').html(average.toFixed(2));
	  document.getElementById("crsGrade").value = h;
    }
  </script>
  
  
  <script type="text/javascript">
  
  //Govt
    $(document).ready(function () {
      //iterate through each textboxes
      $('.txtMarksGOVT').each(function () {
        
        // call 'calcSumAndAverage' method on keyup handler.
        $(this).keyup(function () {
          calcSumAndAveragemGovt();
        });
      });
    });
    
    function calcSumAndAveragemGovt() {
      var total = 0;
      var average = 0;
      
      //iterate through each textboxes with class name '.txtMarks' 
      //and add the values.
      $('.txtMarksGOVT').each(function () {
        
        //add only if the value is number
        if (!isNaN(this.value) && this.value.length != 0) {
          total += parseFloat(this.value);
        }
      });
      
      //Calculate the Average
      if (!isNaN(total) && total != 0) {
        
        //Get count of textboxes with class '.txtMarks'
        var txtboxes = $('.txtMarksGOVT').length;
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
	  
	  document.getElementById("govtTotal").value = total;
      // Show Average upto 2 decimal places using .toFixed() method.
      //$('#average').html(average.toFixed(2));
	  document.getElementById("govtGrade").value = h;
    }
  </script>
  
  
    
  <script type="text/javascript">
  
  //Food and Nut
    $(document).ready(function () {
      //iterate through each textboxes
      $('.txtMarksFNUT').each(function () {
        
        // call 'calcSumAndAverage' method on keyup handler.
        $(this).keyup(function () {
          calcSumAndAveragemFNut();
        });
      });
    });
    
    function calcSumAndAveragemFNut() {
      var total = 0;
      var average = 0;
      
      //iterate through each textboxes with class name '.txtMarks' 
      //and add the values.
      $('.txtMarksFNUT').each(function () {
        
        //add only if the value is number
        if (!isNaN(this.value) && this.value.length != 0) {
          total += parseFloat(this.value);
        }
      });
      
      //Calculate the Average
      if (!isNaN(total) && total != 0) {
        
        //Get count of textboxes with class '.txtMarks'
        var txtboxes = $('.txtMarksFNUT').length;
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
	  
	  document.getElementById("fnutTotal").value = total;
      // Show Average upto 2 decimal places using .toFixed() method.
      //$('#average').html(average.toFixed(2));
	  document.getElementById("fnutGrade").value = h;
    }
  </script>
  
  
  
  <script type="text/javascript">
  
  //Civic Education
    $(document).ready(function () {
      //iterate through each textboxes
      $('.txtMarksCivic').each(function () {
        
        // call 'calcSumAndAverage' method on keyup handler.
        $(this).keyup(function () {
          calcSumAndAveragemCivic();
        });
      });
    });
    
    function calcSumAndAveragemCivic() {
      var total = 0;
      var average = 0;
      
      //iterate through each textboxes with class name '.txtMarks' 
      //and add the values.
      $('.txtMarksCivic').each(function () {
        
        //add only if the value is number
        if (!isNaN(this.value) && this.value.length != 0) {
          total += parseFloat(this.value);
        }
      });
      
      //Calculate the Average
      if (!isNaN(total) && total != 0) {
        
        //Get count of textboxes with class '.txtMarks'
        var txtboxes = $('.txtMarksCivic').length;
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
	  
	  document.getElementById("civicTotal").value = total;
      // Show Average upto 2 decimal places using .toFixed() method.
      //$('#average').html(average.toFixed(2));
	  document.getElementById("civicGrade").value = h;
    }
  </script>
  
  
  
    
  <script type="text/javascript">
  
  //Geography
    $(document).ready(function () {
      //iterate through each textboxes
      $('.txtMarksGEO').each(function () {
        
        // call 'calcSumAndAverage' method on keyup handler.
        $(this).keyup(function () {
          calcSumAndAveragemGeo();
        });
      });
    });
    
    function calcSumAndAveragemGeo() {
      var total = 0;
      var average = 0;
      
      //iterate through each textboxes with class name '.txtMarks' 
      //and add the values.
      $('.txtMarksGEO').each(function () {
        
        //add only if the value is number
        if (!isNaN(this.value) && this.value.length != 0) {
          total += parseFloat(this.value);
        }
      });
      
      //Calculate the Average
      if (!isNaN(total) && total != 0) {
        
        //Get count of textboxes with class '.txtMarks'
        var txtboxes = $('.txtMarksGEO').length;
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
	  
	  document.getElementById("geoTotal").value = total;
      // Show Average upto 2 decimal places using .toFixed() method.
      //$('#average').html(average.toFixed(2));
	  document.getElementById("geoGrade").value = h;
    }
  </script>
  
  
  <script type="text/javascript">
  
  //Animal Husbandry
    $(document).ready(function () {
      //iterate through each textboxes
      $('.txtMarksAH').each(function () {
        
        // call 'calcSumAndAverage' method on keyup handler.
        $(this).keyup(function () {
          calcSumAndAveragemAniHus();
        });
      });
    });
    
    function calcSumAndAveragemAniHus() {
      var total = 0;
      var average = 0;
      
      //iterate through each textboxes with class name '.txtMarks' 
      //and add the values.
      $('.txtMarksAH').each(function () {
        
        //add only if the value is number
        if (!isNaN(this.value) && this.value.length != 0) {
          total += parseFloat(this.value);
        }
      });
      
      //Calculate the Average
      if (!isNaN(total) && total != 0) {
        
        //Get count of textboxes with class '.txtMarks'
        var txtboxes = $('.txtMarksAH').length;
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
	  
	  document.getElementById("anihusTotal").value = total;
      // Show Average upto 2 decimal places using .toFixed() method.
      //$('#average').html(average.toFixed(2));
	  document.getElementById("anihusGrade").value = h;
    }
  </script>
  
  
  <script type="text/javascript">
  
  //Music
    $(document).ready(function () {
      //iterate through each textboxes
      $('.txtMarksMU').each(function () {
        
        // call 'calcSumAndAverage' method on keyup handler.
        $(this).keyup(function () {
          calcSumAndAveragemMusic();
        });
      });
    });
    
    function calcSumAndAveragemMusic() {
      var total = 0;
      var average = 0;
      
      //iterate through each textboxes with class name '.txtMarks' 
      //and add the values.
      $('.txtMarksMU').each(function () {
        
        //add only if the value is number
        if (!isNaN(this.value) && this.value.length != 0) {
          total += parseFloat(this.value);
        }
      });
      
      //Calculate the Average
      if (!isNaN(total) && total != 0) {
        
        //Get count of textboxes with class '.txtMarks'
        var txtboxes = $('.txtMarksMU').length;
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
	  
	  document.getElementById("musicTotal").value = total;
      // Show Average upto 2 decimal places using .toFixed() method.
      //$('#average').html(average.toFixed(2));
	  document.getElementById("musicGrade").value = h;
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
		<h2 class="content-heading">Update Junior Student's Record For Result</h2>
        <h6><font color="#990000"><?php echo $msg; ?></font></h6>

		<div class="row"> 
			<div class="col-12">

				<!-- Examples -->
				<div class="card">
					<div class="card-header">Update Junior Class Result</div>
					<div class="card-body">

						<form action="" method="post">
                        <table id="example1" class="table table-striped">
							
								<tr>
								  <td><?php echo '<a href="updateSResult.php?class='.$classes.'&term='.$term.'&sessions='.$sessions.'">Go Back</a>'; ?></td>
								  <td>&nbsp;</td>
								  <td>&nbsp;</td>
								  <td>&nbsp;</td>
								  <td>&nbsp;</td>
								  <td>&nbsp;</td>
						  </tr>
								<tr>
									<td width="40%"><strong>Student Name:<font color="#996600"><strong> <?php echo $studentname; ?></strong></font></strong></td>
									<td width="1%">&nbsp;</td>
									<td width="23%"><strong>Select Class: <font color="#996600"><strong><?php echo $classes; ?></strong></font></strong></td>
									<td width="9%">&nbsp;</td>
									<td width="19%"><strong>Session: <font color="#996600"><strong><?php echo $sessions; ?></strong></font></strong></td>
									<td width="8%">&nbsp;</td>
								</tr>
								<tr>
									<td><strong>Term:<font color="#996600"><strong> <?php echo $term; ?></strong></font></strong></td>
									<td>&nbsp;</td>
									<td><strong>No. Of Subjects:</strong></td>
									<td colspan="2">&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td colspan="6" align="center"><table width="100%" border="0">
									  <tr align="center">
									    <td width="21%">Subjects</td>
									    <td width="7%">CA</td>
									    <td width="9%">EXAM</td>
									    <td width="9%">TOTAL</td>
									    <td width="54%" align="left">GRADE</td>
								      </tr>
									  <tr>
									    <td align="center">English Language</td>
									    <td align="center"><label>
									      <input name="engCA" type="text" class="txtMarksEng" id="engCA" value="<?php echo $rowValueenglish['cascore']; ?>" size="5" autocomplete="off">
								        </label></td>
									    <td align="center"><input name="engExam" type="text" class="txtMarksEng" id="engExam" value="<?php echo $rowValueenglish['examscore']; ?>" size="5" autocomplete="off"></td>
									    <td align="center"><input name="engTotal" type="text" id="engTotal" value="<?php echo $rowValueenglish['totalscore']; ?>" size="5" readonly="readonly"></td>
									    <td align="left"><input name="engGrade" type="text" id="engGrade" value="<?php echo $rowValueenglish['grade']; ?>" size="5" readonly="readonly"></td>
								      </tr>
									  <tr>
									    <td align="center">Mathematics</td>
									    <td align="center"><label>
									      <input name="mathsCA" type="text" class="txtMarksMaths" id="mathsCA"  value="<?php echo $rowValuemaths['cascore']; ?>" size="5" autocomplete="off">
								        </label></td>
									    <td align="center"><input name="mathsExam" type="text" class="txtMarksMaths" id="mathsExam" value="<?php echo $rowValuemaths['examscore']; ?>" size="5" autocomplete="off"></td>
									    <td align="center"><input name="mathsTotal" type="text" id="mathsTotal" value="<?php echo $rowValuemaths['totalscore']; ?>" size="5" readonly="readonly"></td>
									    <td align="left"><input name="mathsGrade" type="text" id="mathsGrade" value="<?php echo $rowValuemaths['grade']; ?>" size="5" readonly="readonly"></td>
								      </tr>
                                      <tr>
									    <td align="center">Accounting</td>
									    <td align="center"><label>
									      <input name="acctCA" type="text" class="txtMarksACCT" id="acctCA"  value="<?php echo $rowValueacct['cascore']; ?>" size="5" autocomplete="off">
								        </label></td>
									    <td align="center"><input name="acctExam" type="text" class="txtMarksACCT" id="acctExam" value="<?php echo $rowValueacct['examscore']; ?>" size="5" autocomplete="off"></td>
									    <td align="center"><input name="acctTotal" type="text" id="acctTotal" value="<?php echo $rowValueacct['totalscore']; ?>" size="5" readonly="readonly"></td>
									    <td align="left"><input name="acctGrade" type="text" id="acctGrade" value="<?php echo $rowValueacct['grade']; ?>" size="5" readonly="readonly"></td>
								      </tr>
                                      <tr>
									    <td align="center">Igbo</td>
									    <td align="center"><label>
									      <input name="igboCA" type="text" class="txtMarksIgbo" id="igboCA"  value="<?php echo $rowValueigbo['cascore']; ?>" size="5" autocomplete="off">
								        </label></td>
									    <td align="center"><input name="igboExam" type="text" class="txtMarksIgbo" id="igboExam" value="<?php echo $rowValueigbo['examscore']; ?>" size="5" autocomplete="off"></td>
									    <td align="center"><input name="igboTotal" type="text" id="igboTotal" value="<?php echo $rowValueigbo['totalscore']; ?>" size="5" readonly="readonly"></td>
									    <td align="left"><input name="igboGrade" type="text" id="igboGrade" value="<?php echo $rowValueigbo['grade']; ?>" size="5" readonly="readonly"></td>
								      </tr>
                                      <tr>
									    <td align="center">Computer Studies</td>
									    <td align="center"><label>
									      <input name="compCA" type="text" class="txtMarksComp" id="compCA"  value="<?php echo $rowValuecomputer['cascore']; ?>" size="5" autocomplete="off">
								        </label></td>
									    <td align="center"><input name="compExam" type="text" class="txtMarksComp" id="compExam" value="<?php echo $rowValuecomputer['examscore']; ?>" size="5" autocomplete="off"></td>
									    <td align="center"><input name="compTotal" type="text" id="compTotal" value="<?php echo $rowValuecomputer['totalscore']; ?>" size="5" readonly="readonly"></td>
									    <td align="left"><input name="compGrade" type="text" id="compGrade" value="<?php echo $rowValuecomputer['grade']; ?>" size="5" readonly="readonly"></td>
								      </tr>
                                      <tr>
									    <td align="center">Agric Science</td>
									    <td align="center"><label>
									      <input name="agricCA" type="text" class="txtMarksAgric" id="agricCA"  value="<?php echo $rowValueagric['cascore']; ?>" size="5" autocomplete="off">
								        </label></td>
									    <td align="center"><input name="agricExam" type="text" class="txtMarksAgric" id="agricExam" value="<?php echo $rowValueagric['examscore']; ?>" size="5" autocomplete="off"></td>
									    <td align="center"><input name="agricTotal" type="text" id="agricTotal" value="<?php echo $rowValueagric['totalscore']; ?>" size="5" readonly="readonly"></td>
									    <td align="left"><input name="agricGrade" type="text" id="agricGrade" value="<?php echo $rowValueagric['grade']; ?>" size="5" readonly="readonly"></td>
								      </tr>
                                      <tr>
									    <td align="center">Fishery</td>
									    <td align="center"><label>
									      <input name="fisheryCA" type="text" class="txtMarksFishery" id="fisheryCA"  value="<?php echo $rowValuefishery['cascore']; ?>" size="5" autocomplete="off">
								        </label></td>
									    <td align="center"><input name="fisheryExam" type="text" class="txtMarksFishery" id="fisheryExam" value="<?php echo $rowValuefishery['examscore']; ?>" size="5" autocomplete="off"></td>
									    <td align="center"><input name="fisheryTotal" type="text" id="fisheryTotal" value="<?php echo $rowValuefishery['totalscore']; ?>" size="5" readonly="readonly"></td>
									    <td align="left"><input name="fisheryGrade" type="text" id="fisheryGrade" value="<?php echo $rowValuefishery['grade']; ?>" size="5" readonly="readonly"></td>
								      </tr>
                                      <tr>
									    <td align="center">Physics</td>
									    <td align="center"><label>
									      <input name="phyCA" type="text" class="txtMarksPHY" id="phyCA"  value="<?php echo $rowValuephy['cascore']; ?>" size="5" autocomplete="off">
								        </label></td>
									    <td align="center"><input name="phyExam" type="text" class="txtMarksPHY" id="phyExam" value="<?php echo $rowValuephy['examscore']; ?>" size="5" autocomplete="off"></td>
									    <td align="center"><input name="phyTotal" type="text" id="phyTotal" value="<?php echo $rowValuephy['totalscore']; ?>" size="5" readonly="readonly"></td>
									    <td align="left"><input name="phyGrade" type="text" id="phyGrade" value="<?php echo $rowValuephy['grade']; ?>" size="5" readonly="readonly"></td>
								      </tr>
                                      <tr>
									    <td align="center">Chemistry</td>
									    <td align="center"><label>
									      <input name="chemCA" type="text" class="txtMarksCHEM" id="chemCA"  value="<?php echo $rowValuechem['cascore']; ?>" size="5" autocomplete="off">
								        </label></td>
									    <td align="center"><input name="chemExam" type="text" class="txtMarksCHEM" id="chemExam" value="<?php echo $rowValuechem['examscore']; ?>" size="5" autocomplete="off"></td>
									    <td align="center"><input name="chemTotal" type="text" id="chemTotal" value="<?php echo $rowValuechem['totalscore']; ?>" size="5" readonly="readonly"></td>
									    <td align="left"><input name="chemGrade" type="text" id="chemGrade" value="<?php echo $rowValuechem['grade']; ?>" size="5" readonly="readonly"></td>
								      </tr>
                                      <tr>
									    <td align="center">Literature</td>
									    <td align="center"><label>
									      <input name="literatureCA" type="text" class="txtMarksLiterature" id="literatureCA"  value="<?php echo $rowValueliterature['cascore']; ?>" size="5" autocomplete="off">
								        </label></td>
									    <td align="center"><input name="literatureExam" type="text" class="txtMarksLiterature" id="literatureExam" value="<?php echo $rowValueliterature['examscore']; ?>" size="5" autocomplete="off"></td>
									    <td align="center"><input name="literatureTotal" type="text" id="literatureTotal" value="<?php echo $rowValueliterature['totalscore']; ?>" size="5" readonly="readonly"></td>
									    <td align="left"><input name="literatureGrade" type="text" id="literatureGrade" value="<?php echo $rowValueliterature['grade']; ?>" size="5" readonly="readonly"></td>
								      </tr>
                                      <tr>
									    <td align="center">Biology</td>
									    <td align="center"><label>
									      <input name="bioCA" type="text" class="txtMarksBIO" id="bioCA"  value="<?php echo $rowValuebio['cascore']; ?>" size="5" autocomplete="off">
								        </label></td>
									    <td align="center"><input name="bioExam" type="text" class="txtMarksBIO" id="bioExam" value="<?php echo $rowValuebio['examscore']; ?>" size="5" autocomplete="off"></td>
									    <td align="center"><input name="bioTotal" type="text" id="bioTotal" value="<?php echo $rowValuebio['totalscore']; ?>" size="5" readonly="readonly"></td>
									    <td align="left"><input name="bioGrade" type="text" id="bioGrade" value="<?php echo $rowValuebio['grade']; ?>" size="5" readonly="readonly"></td>
								      </tr>
                                      <tr>
									    <td align="center">Economics</td>
									    <td align="center"><label>
									      <input name="econsCA" type="text" class="txtMarksEcons" id="econsCA"  value="<?php echo $rowValueecons['cascore']; ?>" size="5" autocomplete="off">
								        </label></td>
									    <td align="center"><input name="econsExam" type="text" class="txtMarksEcons" id="econsExam" value="<?php echo $rowValueecons['examscore']; ?>" size="5" autocomplete="off"></td>
									    <td align="center"><input name="econsTotal" type="text" id="econsTotal" value="<?php echo $rowValueecons['totalscore']; ?>" size="5" readonly="readonly"></td>
									    <td align="left"><input name="econsGrade" type="text" id="econsGrade" value="<?php echo $rowValueecons['grade']; ?>" size="5" readonly="readonly"></td>
								      </tr>
                                      <tr>
									    <td align="center">C.R.S</td>
									    <td align="center"><label>
									      <input name="crsCA" type="text" class="txtMarksCRS" id="crsCA"  value="<?php echo $rowValuecrs['cascore']; ?>" size="5" autocomplete="off">
								        </label></td>
									    <td align="center"><input name="crsExam" type="text" class="txtMarksCRS" id="crsExam" value="<?php echo $rowValuecrs['examscore']; ?>" size="5" autocomplete="off"></td>
									    <td align="center"><input name="crsTotal" type="text" id="crsTotal" value="<?php echo $rowValuecrs['totalscore']; ?>" size="5" readonly="readonly"></td>
									    <td align="left"><input name="crsGrade" type="text" id="crsGrade" value="<?php echo $rowValuecrs['grade']; ?>" size="5" readonly="readonly"></td>
								      </tr>
                                      <tr>
									    <td align="center">Government</td>
									    <td align="center"><label>
									      <input name="govtCA" type="text" class="txtMarksGOVT" id="govtCA"  value="<?php echo $rowValuegovt['cascore']; ?>" size="5" autocomplete="off">
								        </label></td>
									    <td align="center"><input name="govtExam" type="text" class="txtMarksGOVT" id="govtExam" value="<?php echo $rowValuegovt['examscore']; ?>" size="5" autocomplete="off"></td>
									    <td align="center"><input name="govtTotal" type="text" id="govtTotal" value="<?php echo $rowValuegovt['totalscore']; ?>" size="5" readonly="readonly"></td>
									    <td align="left"><input name="govtGrade" type="text" id="govtGrade" value="<?php echo $rowValuegovt['grade']; ?>" size="5" readonly="readonly"></td>
								      </tr>
                                      <tr>
									    <td align="center">Food &amp; Nutrition</td>
									    <td align="center"><label>
									      <input name="fnutCA" type="text" class="txtMarksFNUT" id="fnutCA"  value="<?php echo $rowValuefnut['cascore']; ?>" size="5" autocomplete="off">
								        </label></td>
									    <td align="center"><input name="fnutExam" type="text" class="txtMarksFNUT" id="fnutExam" value="<?php echo $rowValuefnut['examscore']; ?>" size="5" autocomplete="off"></td>
									    <td align="center"><input name="fnutTotal" type="text" id="fnutTotal" value="<?php echo $rowValuefnut['totalscore']; ?>" size="5" readonly="readonly"></td>
									    <td align="left"><input name="fnutGrade" type="text" id="fnutGrade" value="<?php echo $rowValuefnut['grade']; ?>" size="5" readonly="readonly"></td>
								      </tr>
                                      <tr>
									    <td align="center">Civic Education</td>
									    <td align="center"><label>
									      <input name="civicCA" type="text" class="txtMarksCivic" id="civicCA"  value="<?php echo $rowValuecivic['cascore']; ?>" size="5" autocomplete="off">
								        </label></td>
									    <td align="center"><input name="civicExam" type="text" class="txtMarksCivic" id="civicExam" value="<?php echo $rowValuecivic['examscore']; ?>" size="5" autocomplete="off"></td>
									    <td align="center"><input name="civicTotal" type="text" id="civicTotal" value="<?php echo $rowValuecivic['totalscore']; ?>" size="5" readonly="readonly"></td>
									    <td align="left"><input name="civicGrade" type="text" id="civicGrade" value="<?php echo $rowValuecivic['grade']; ?>" size="5" readonly="readonly"></td>
								      </tr>
                                      <tr>
									    <td align="center">Geography</td>
									    <td align="center"><label>
									      <input name="geoCA" type="text" class="txtMarksGEO" id="geoCA"  value="<?php echo $rowValuegeo['cascore']; ?>" size="5" autocomplete="off">
								        </label></td>
									    <td align="center"><input name="geoExam" type="text" class="txtMarksGEO" id="geoExam" value="<?php echo $rowValuegeo['examscore']; ?>" size="5" autocomplete="off"></td>
									    <td align="center"><input name="geoTotal" type="text" id="geoTotal" value="<?php echo $rowValuegeo['totalscore']; ?>" size="5" readonly="readonly"></td>
									    <td align="left"><input name="geoGrade" type="text" id="geoGrade" value="<?php echo $rowValuegeo['grade']; ?>" size="5" readonly="readonly"></td>
								      </tr>
									  <tr>
									    <td align="center">Animal Husbandry</td>
									    <td align="center"><label>
									      <input name="anihusCA" type="text" class="txtMarksAH" id="anihusCA"  value="<?php echo $rowValueanihus['cascore']; ?>" size="5" autocomplete="off">
								        </label></td>
									    <td align="center"><input name="anihusExam" type="text" class="txtMarksAH" id="anihusExam" value="<?php echo $rowValueanihus['examscore']; ?>" size="5" autocomplete="off"></td>
									    <td align="center"><input name="anihusTotal" type="text" id="anihusTotal" value="<?php echo $rowValueanihus['totalscore']; ?>" size="5" readonly="readonly"></td>
									    <td align="left"><input name="anihusGrade" type="text" id="anihusGrade" value="<?php echo $rowValueanihus['grade']; ?>" size="5" readonly="readonly"></td>
								      </tr>
                                      <tr>
									    <td align="center">Music</td>
									    <td align="center"><label>
									      <input name="musicCA" type="text" class="txtMarksMU" id="musicCA"  value="<?php echo $rowValuemusic['cascore']; ?>" size="5" autocomplete="off">
								        </label></td>
									    <td align="center"><input name="musicExam" type="text" class="txtMarksMU" id="musicExam" value="<?php echo $rowValuemusic['examscore']; ?>" size="5" autocomplete="off"></td>
									    <td align="center"><input name="musicTotal" type="text" id="musicTotal" value="<?php echo $rowValuemusic['totalscore']; ?>" size="5" readonly="readonly"></td>
									    <td align="left"><input name="musicGrade" type="text" id="musicGrade" value="<?php echo $rowValuemusic['grade']; ?>" size="5" readonly="readonly"></td>
								      </tr>
									  <tr>
									    <td align="center"><?php echo '<a href="updateSResult.php?class='.$classes.'&term='.$term.'&sessions='.$sessions.'">Go Back</a>'; ?></td>
									    <td align="center">&nbsp;</td>
									    <td align="center">&nbsp;</td>
									    <td align="center">&nbsp;</td>
									    <td align="left"><input type="submit" name="update" id="update" value="UPDATE RESULT"></td>
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