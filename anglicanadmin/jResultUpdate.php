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
		
		
		$sqlenglish = "SELECT * FROM jenglish WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		$queryenglish = mysqli_query($link,$sqlenglish) or die(mysqli_error($link));
		$rowValueenglish = mysqli_fetch_assoc($queryenglish);
		
	
		$sqlmaths = "SELECT * FROM jmaths WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		$querymaths = mysqli_query($link,$sqlmaths) or die(mysqli_error($link));
		$rowValuemaths = mysqli_fetch_assoc($querymaths);
		
		
		$sqlagric = "SELECT * FROM jagric WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		$queryagric = mysqli_query($link,$sqlagric) or die(mysqli_error($link));
		$rowValueagric = mysqli_fetch_assoc($queryagric);
		
		
		$sqlfrench = "SELECT * FROM jfrench WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		$queryfrench = mysqli_query($link,$sqlfrench) or die(mysqli_error($link));
		$rowValuefrench = mysqli_fetch_assoc($queryfrench);
		
		
		$sqligbo = "SELECT * FROM jigbo WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		$queryigbo = mysqli_query($link,$sqligbo) or die(mysqli_error($link));
		$rowValueigbo = mysqli_fetch_assoc($queryigbo);
		
		
		$sqlcomputer = "SELECT * FROM jcomputer WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		$querycomputer = mysqli_query($link,$sqlcomputer) or die(mysqli_error($link));
		$rowValuecomputer = mysqli_fetch_assoc($querycomputer);
		
		$sqlfishery = "SELECT * FROM jfishery WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		$queryfishery = mysqli_query($link,$sqlfishery) or die(mysqli_error($link));
		$rowValuefishery = mysqli_fetch_assoc($queryfishery);
		
		
		$sqlbasicsci = "SELECT * FROM jbasicsci WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		$querybasicsci = mysqli_query($link,$sqlbasicsci) or die(mysqli_error($link));
		$rowValuebasicsci = mysqli_fetch_assoc($querybasicsci);
		
		
		$sqlbasictech = "SELECT * FROM jbasictech WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		$querybasictech = mysqli_query($link,$sqlbasictech) or die(mysqli_error($link));
		$rowValuebasictech = mysqli_fetch_assoc($querybasictech);
		
		
		$sqlliterature = "SELECT * FROM jliterature WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		$queryliterature = mysqli_query($link,$sqlliterature) or die(mysqli_error($link));
		$rowValueliterature = mysqli_fetch_assoc($queryliterature);
		
		
		$sqlphyedu = "SELECT * FROM jphyedu WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		$queryphyedu = mysqli_query($link,$sqlphyedu) or die(mysqli_error($link));
		$rowValuephyedu = mysqli_fetch_assoc($queryphyedu);
		
		
		$sqlhomeecons = "SELECT * FROM jhomec WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		$queryhomeecons = mysqli_query($link,$sqlhomeecons) or die(mysqli_error($link));
		$rowValuehomeecons = mysqli_fetch_assoc($queryhomeecons);
		
		
		$sqlcrs = "SELECT * FROM jcrs WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		$querycrs = mysqli_query($link,$sqlcrs) or die(mysqli_error($link));
		$rowValuecrs = mysqli_fetch_assoc($querycrs);
		
		
		
		$sqlsocialstd = "SELECT * FROM jsocialstd WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		$querysocialstd = mysqli_query($link,$sqlsocialstd) or die(mysqli_error($link));
		$rowValuesocialstd = mysqli_fetch_assoc($querysocialstd);
		
		
		$sqlbusstd = "SELECT * FROM jbusinessstd WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		$querybusstd = mysqli_query($link,$sqlbusstd) or die(mysqli_error($link));
		$rowValuebusstd = mysqli_fetch_assoc($querybusstd);
		
		
		$sqlcivic = "SELECT * FROM jcivicedu WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		$querycivic = mysqli_query($link,$sqlcivic) or die(mysqli_error($link));
		$rowValuecivic = mysqli_fetch_assoc($querycivic);
		
		
		$sqlcca = "SELECT * FROM jcca WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		$querycca = mysqli_query($link,$sqlcca) or die(mysqli_error($link));
		$rowValuecca = mysqli_fetch_assoc($querycca);
		
		
		$sqlmusic = "SELECT * FROM jmusic WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
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
		
		
		////////////////French
		$frenchCA = mysqli_real_escape_string($link,trim($_POST['frenchCA']));
		$frenchExam = mysqli_real_escape_string($link,trim($_POST['frenchExam']));
		$frenchTotal = mysqli_real_escape_string($link,trim($_POST['frenchTotal']));
		$frenchGrade = mysqli_real_escape_string($link,trim($_POST['frenchGrade']));
		
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
		
		
		////////////////Basic Science
		$basicsciCA = mysqli_real_escape_string($link,trim($_POST['basicsciCA']));
		$basicsciExam = mysqli_real_escape_string($link,trim($_POST['basicsciExam']));
		$basicsciTotal = mysqli_real_escape_string($link,trim($_POST['basicsciTotal']));
		$basicsciGrade = mysqli_real_escape_string($link,trim($_POST['basicsciGrade']));
		
		
		////////////////Basic Tech
		$basictechCA = mysqli_real_escape_string($link,trim($_POST['basictechCA']));
		$basictechExam = mysqli_real_escape_string($link,trim($_POST['basictechExam']));
		$basictechTotal = mysqli_real_escape_string($link,trim($_POST['basictechTotal']));
		$basictechGrade = mysqli_real_escape_string($link,trim($_POST['basictechGrade']));
		
		
		////////////////Literature
		$literatureCA = mysqli_real_escape_string($link,trim($_POST['literatureCA']));
		$literatureExam = mysqli_real_escape_string($link,trim($_POST['literatureExam']));
		$literatureTotal = mysqli_real_escape_string($link,trim($_POST['literatureTotal']));
		$literatureGrade = mysqli_real_escape_string($link,trim($_POST['literatureGrade']));
		
		
		////////////////Phy Edu.
		$phyeduCA = mysqli_real_escape_string($link,trim($_POST['phyeduCA']));
		$phyeduExam = mysqli_real_escape_string($link,trim($_POST['phyeduExam']));
		$phyeduTotal = mysqli_real_escape_string($link,trim($_POST['phyeduTotal']));
		$phyeduGrade = mysqli_real_escape_string($link,trim($_POST['phyeduGrade']));
		
		
		////////////////Homec.
		$homecCA = mysqli_real_escape_string($link,trim($_POST['homecCA']));
		$homecExam = mysqli_real_escape_string($link,trim($_POST['homecExam']));
		$homecTotal = mysqli_real_escape_string($link,trim($_POST['homecTotal']));
		$homecGrade = mysqli_real_escape_string($link,trim($_POST['homecGrade']));
		
		
		////////////////CRS.
		$crsCA = mysqli_real_escape_string($link,trim($_POST['crsCA']));
		$crsExam = mysqli_real_escape_string($link,trim($_POST['crsExam']));
		$crsTotal = mysqli_real_escape_string($link,trim($_POST['crsTotal']));
		$crsGrade = mysqli_real_escape_string($link,trim($_POST['crsGrade']));
		
		
		////////////////Social Stud.
		$socialstdCA = mysqli_real_escape_string($link,trim($_POST['socialstdCA']));
		$socialstdExam = mysqli_real_escape_string($link,trim($_POST['socialstdExam']));
		$socialstdTotal = mysqli_real_escape_string($link,trim($_POST['socialstdTotal']));
		$socialstdGrade = mysqli_real_escape_string($link,trim($_POST['socialstdGrade']));
		
		
		////////////////Business Stud.
		$busstdCA = mysqli_real_escape_string($link,trim($_POST['busstdCA']));
		$busstdExam = mysqli_real_escape_string($link,trim($_POST['busstdExam']));
		$busstdTotal = mysqli_real_escape_string($link,trim($_POST['busstdTotal']));
		$busstdGrade = mysqli_real_escape_string($link,trim($_POST['busstdGrade']));
		
		
		////////////////Civic Edu.
		$civicCA = mysqli_real_escape_string($link,trim($_POST['civicCA']));
		$civicExam = mysqli_real_escape_string($link,trim($_POST['civicExam']));
		$civicTotal = mysqli_real_escape_string($link,trim($_POST['civicTotal']));
		$civicGrade = mysqli_real_escape_string($link,trim($_POST['civicGrade']));
		
		
		////////////////CCA.
		$ccaCA = mysqli_real_escape_string($link,trim($_POST['ccaCA']));
		$ccaExam = mysqli_real_escape_string($link,trim($_POST['ccaExam']));
		$ccaTotal = mysqli_real_escape_string($link,trim($_POST['ccaTotal']));
		$ccaGrade = mysqli_real_escape_string($link,trim($_POST['ccaGrade']));
		
		////////////////Music.
		$musicCA = mysqli_real_escape_string($link,trim($_POST['musicCA']));
		$musicExam = mysqli_real_escape_string($link,trim($_POST['musicExam']));
		$musicTotal = mysqli_real_escape_string($link,trim($_POST['musicTotal']));
		$musicGrade = mysqli_real_escape_string($link,trim($_POST['musicGrade']));
		
	
		$zero = 0;
		$nograde = '';
		$sqlenglish = "UPDATE jenglish  SET cascore = '$engCA', examscore = '$engExam',  totalscore = '$engTotal',  grade = '$engGrade' WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		mysqli_query($link,$sqlenglish) or die(mysqli_error($link));
	
		$sqlmaths = "UPDATE jmaths  SET cascore = '$mathsCA', examscore = '$mathsExam',  totalscore = '$mathsTotal',  grade = '$mathsGrade' WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		mysqli_query($link,$sqlmaths) or die(mysqli_error($link));
		
		
		$sqlfrench = "UPDATE jfrench  SET cascore = '$frenchCA', examscore = '$frenchExam',  totalscore = '$frenchTotal',  grade = '$frenchGrade' WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		mysqli_query($link,$sqlfrench) or die(mysqli_error($link));
		
		
		$sqligbo = "UPDATE jigbo  SET cascore = '$igboCA', examscore = '$igboExam',  totalscore = '$igboTotal',  grade = '$igboGrade' WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		mysqli_query($link,$sqligbo) or die(mysqli_error($link));
		
		
		$sqlcomp = "UPDATE jcomputer  SET cascore = '$compCA', examscore = '$compExam',  totalscore = '$compTotal',  grade = '$compGrade' WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		mysqli_query($link,$sqlcomp) or die(mysqli_error($link));
		
		
		$sqlagric = "UPDATE jagric  SET cascore = '$agricCA', examscore = '$agricExam',  totalscore = '$agricTotal',  grade = '$agricGrade' WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		mysqli_query($link,$sqlagric) or die(mysqli_error($link));
		
		
		$sqlfishery = "UPDATE jfishery  SET cascore = '$fisheryCA', examscore = '$fisheryExam',  totalscore = '$fisheryTotal',  grade = '$fisheryGrade' WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		mysqli_query($link,$sqlfishery) or die(mysqli_error($link));
		
		
		$sqlbasicsci = "UPDATE jbasicsci  SET cascore = '$basicsciCA', examscore = '$basicsciExam',  totalscore = '$basicsciTotal',  grade = '$basicsciGrade' WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		mysqli_query($link,$sqlbasicsci) or die(mysqli_error($link));
		
		
		$sqlbasictech = "UPDATE jbasictech  SET cascore = '$basictechCA', examscore = '$basictechExam',  totalscore = '$basictechTotal',  grade = '$basictechGrade' WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		mysqli_query($link,$sqlbasictech) or die(mysqli_error($link));
		
		
		$sqlliterature = "UPDATE jliterature  SET cascore = '$literatureCA', examscore = '$literatureExam',  totalscore = '$literatureTotal',  grade = '$literatureGrade' WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		mysqli_query($link,$sqlliterature) or die(mysqli_error($link));
		
		
		$sqlphyedu = "UPDATE jphyedu  SET cascore = '$phyeduCA', examscore = '$phyeduExam',  totalscore = '$phyeduTotal',  grade = '$phyeduGrade' WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		mysqli_query($link,$sqlphyedu) or die(mysqli_error($link));
		
		
		$sqlhomec = "UPDATE jhomec  SET cascore = '$homecCA', examscore = '$homecExam',  totalscore = '$homecTotal',  grade = '$homecGrade' WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		mysqli_query($link,$sqlhomec) or die(mysqli_error($link));
		
		
		$sqlcrs = "UPDATE jcrs  SET cascore = '$crsCA', examscore = '$crsExam',  totalscore = '$crsTotal',  grade = '$crsGrade' WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		mysqli_query($link,$sqlcrs) or die(mysqli_error($link));
		
		
		$sqlsocialstd = "UPDATE jsocialstd  SET cascore = '$socialstdCA', examscore = '$socialstdExam',  totalscore = '$socialstdTotal',  grade = '$socialstdGrade' WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		mysqli_query($link,$sqlsocialstd) or die(mysqli_error($link));
		
		
		$sqlbusstd = "UPDATE jbusinessstd  SET cascore = '$busstdCA', examscore = '$busstdExam',  totalscore = '$busstdTotal',  grade = '$busstdGrade' WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		mysqli_query($link,$sqlbusstd) or die(mysqli_error($link));
		
		
		$sqlcivic = "UPDATE jcivicedu  SET cascore = '$civicCA', examscore = '$civicExam',  totalscore = '$civicTotal',  grade = '$civicGrade' WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		mysqli_query($link,$sqlcivic) or die(mysqli_error($link));
		
		
		$sqlcca = "UPDATE jcca  SET cascore = '$ccaCA', examscore = '$ccaExam',  totalscore = '$ccaTotal',  grade = '$ccaGrade' WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		mysqli_query($link,$sqlcca) or die(mysqli_error($link));
		
		$sqlmusic = "UPDATE jmusic  SET cascore = '$musicCA', examscore = '$musicExam',  totalscore = '$musicTotal',  grade = '$musicGrade' WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		mysqli_query($link,$sqlmusic) or die(mysqli_error($link));
		
		
			
			$_SESSION['class'] = $classes;
			$_SESSION['sessions'] = $sessions;
			$_SESSION['term'] = $term;
			
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
  
  //French
    $(document).ready(function () {
      //iterate through each textboxes
      $('.txtMarksFrench').each(function () {
        
        // call 'calcSumAndAverage' method on keyup handler.
        $(this).keyup(function () {
          calcSumAndAveragemFrench();
        });
      });
    });
    
    function calcSumAndAveragemFrench() {
      var total = 0;
      var average = 0;
      
      //iterate through each textboxes with class name '.txtMarks' 
      //and add the values.
      $('.txtMarksFrench').each(function () {
        
        //add only if the value is number
        if (!isNaN(this.value) && this.value.length != 0) {
          total += parseFloat(this.value);
        }
      });
      
      //Calculate the Average
      if (!isNaN(total) && total != 0) {
        
        //Get count of textboxes with class '.txtMarks'
        var txtboxes = $('.txtMarksFrench').length;
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
	  
	  document.getElementById("frenchTotal").value = total;
      // Show Average upto 2 decimal places using .toFixed() method.
      //$('#average').html(average.toFixed(2));
	  document.getElementById("frenchGrade").value = h;
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
  
  //Basic Science
    $(document).ready(function () {
      //iterate through each textboxes
      $('.txtMarksBasicSci').each(function () {
        
        // call 'calcSumAndAverage' method on keyup handler.
        $(this).keyup(function () {
          calcSumAndAveragemBasicSci();
        });
      });
    });
    
    function calcSumAndAveragemBasicSci() {
      var total = 0;
      var average = 0;
      
      //iterate through each textboxes with class name '.txtMarks' 
      //and add the values.
      $('.txtMarksBasicSci').each(function () {
        
        //add only if the value is number
        if (!isNaN(this.value) && this.value.length != 0) {
          total += parseFloat(this.value);
        }
      });
      
      //Calculate the Average
      if (!isNaN(total) && total != 0) {
        
        //Get count of textboxes with class '.txtMarks'
        var txtboxes = $('.txtMarksBasicSci').length;
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
	  
	  document.getElementById("basicsciTotal").value = total;
      // Show Average upto 2 decimal places using .toFixed() method.
      //$('#average').html(average.toFixed(2));
	  document.getElementById("basicsciGrade").value = h;
    }
  </script>
  
  <script type="text/javascript">
  
  //Basic Tech
    $(document).ready(function () {
      //iterate through each textboxes
      $('.txtMarksBasicTech').each(function () {
        
        // call 'calcSumAndAverage' method on keyup handler.
        $(this).keyup(function () {
          calcSumAndAveragemBasicTech();
        });
      });
    });
    
    function calcSumAndAveragemBasicTech() {
      var total = 0;
      var average = 0;
      
      //iterate through each textboxes with class name '.txtMarks' 
      //and add the values.
      $('.txtMarksBasicTech').each(function () {
        
        //add only if the value is number
        if (!isNaN(this.value) && this.value.length != 0) {
          total += parseFloat(this.value);
        }
      });
      
      //Calculate the Average
      if (!isNaN(total) && total != 0) {
        
        //Get count of textboxes with class '.txtMarks'
        var txtboxes = $('.txtMarksBasicTech').length;
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
	  
	  document.getElementById("basictechTotal").value = total;
      // Show Average upto 2 decimal places using .toFixed() method.
      //$('#average').html(average.toFixed(2));
	  document.getElementById("basictechGrade").value = h;
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
  
  //Phy Edu
    $(document).ready(function () {
      //iterate through each textboxes
      $('.txtMarksPhyEdu').each(function () {
        
        // call 'calcSumAndAverage' method on keyup handler.
        $(this).keyup(function () {
          calcSumAndAveragemPhyEdu();
        });
      });
    });
    
    function calcSumAndAveragemPhyEdu() {
      var total = 0;
      var average = 0;
      
      //iterate through each textboxes with class name '.txtMarks' 
      //and add the values.
      $('.txtMarksPhyEdu').each(function () {
        
        //add only if the value is number
        if (!isNaN(this.value) && this.value.length != 0) {
          total += parseFloat(this.value);
        }
      });
      
      //Calculate the Average
      if (!isNaN(total) && total != 0) {
        
        //Get count of textboxes with class '.txtMarks'
        var txtboxes = $('.txtMarksPhyEdu').length;
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
	  
	  document.getElementById("phyeduTotal").value = total;
      // Show Average upto 2 decimal places using .toFixed() method.
      //$('#average').html(average.toFixed(2));
	  document.getElementById("phyeduGrade").value = h;
    }
  </script>
  
  
  <script type="text/javascript">
  
  //Homec
    $(document).ready(function () {
      //iterate through each textboxes
      $('.txtMarksHomec').each(function () {
        
        // call 'calcSumAndAverage' method on keyup handler.
        $(this).keyup(function () {
          calcSumAndAveragemHomec();
        });
      });
    });
    
    function calcSumAndAveragemHomec() {
      var total = 0;
      var average = 0;
      
      //iterate through each textboxes with class name '.txtMarks' 
      //and add the values.
      $('.txtMarksHomec').each(function () {
        
        //add only if the value is number
        if (!isNaN(this.value) && this.value.length != 0) {
          total += parseFloat(this.value);
        }
      });
      
      //Calculate the Average
      if (!isNaN(total) && total != 0) {
        
        //Get count of textboxes with class '.txtMarks'
        var txtboxes = $('.txtMarksHomec').length;
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
	  
	  document.getElementById("homecTotal").value = total;
      // Show Average upto 2 decimal places using .toFixed() method.
      //$('#average').html(average.toFixed(2));
	  document.getElementById("homecGrade").value = h;
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
  
  //Social Studies
    $(document).ready(function () {
      //iterate through each textboxes
      $('.txtMarksSocialStd').each(function () {
        
        // call 'calcSumAndAverage' method on keyup handler.
        $(this).keyup(function () {
          calcSumAndAveragemSocialStd();
        });
      });
    });
    
    function calcSumAndAveragemSocialStd() {
      var total = 0;
      var average = 0;
      
      //iterate through each textboxes with class name '.txtMarks' 
      //and add the values.
      $('.txtMarksSocialStd').each(function () {
        
        //add only if the value is number
        if (!isNaN(this.value) && this.value.length != 0) {
          total += parseFloat(this.value);
        }
      });
      
      //Calculate the Average
      if (!isNaN(total) && total != 0) {
        
        //Get count of textboxes with class '.txtMarks'
        var txtboxes = $('.txtMarksSocialStd').length;
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
	  
	  document.getElementById("socialstdTotal").value = total;
      // Show Average upto 2 decimal places using .toFixed() method.
      //$('#average').html(average.toFixed(2));
	  document.getElementById("socialstdGrade").value = h;
    }
  </script>
  
  
    
  <script type="text/javascript">
  
  //BUsiness Studies
    $(document).ready(function () {
      //iterate through each textboxes
      $('.txtMarksBusStd').each(function () {
        
        // call 'calcSumAndAverage' method on keyup handler.
        $(this).keyup(function () {
          calcSumAndAveragemBusStd();
        });
      });
    });
    
    function calcSumAndAveragemBusStd() {
      var total = 0;
      var average = 0;
      
      //iterate through each textboxes with class name '.txtMarks' 
      //and add the values.
      $('.txtMarksBusStd').each(function () {
        
        //add only if the value is number
        if (!isNaN(this.value) && this.value.length != 0) {
          total += parseFloat(this.value);
        }
      });
      
      //Calculate the Average
      if (!isNaN(total) && total != 0) {
        
        //Get count of textboxes with class '.txtMarks'
        var txtboxes = $('.txtMarksBusStd').length;
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
	  
	  document.getElementById("busstdTotal").value = total;
      // Show Average upto 2 decimal places using .toFixed() method.
      //$('#average').html(average.toFixed(2));
	  document.getElementById("busstdGrade").value = h;
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
  
  //Civic Education
    $(document).ready(function () {
      //iterate through each textboxes
      $('.txtMarksCCA ').each(function () {
        
        // call 'calcSumAndAverage' method on keyup handler.
        $(this).keyup(function () {
          calcSumAndAveragemCCA();
        });
      });
    });
    
    function calcSumAndAveragemCCA() {
      var total = 0;
      var average = 0;
      
      //iterate through each textboxes with class name '.txtMarks' 
      //and add the values.
      $('.txtMarksCCA ').each(function () {
        
        //add only if the value is number
        if (!isNaN(this.value) && this.value.length != 0) {
          total += parseFloat(this.value);
        }
      });
      
      //Calculate the Average
      if (!isNaN(total) && total != 0) {
        
        //Get count of textboxes with class '.txtMarks'
        var txtboxes = $('.txtMarksCCA ').length;
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
	  
	  document.getElementById("ccaTotal").value = total;
      // Show Average upto 2 decimal places using .toFixed() method.
      //$('#average').html(average.toFixed(2));
	  document.getElementById("ccaGrade").value = h;
    }
  </script>
  
  
  <script type="text/javascript">
  
  //Music
    $(document).ready(function () {
      //iterate through each textboxes
      $('.txtMarksMU ').each(function () {
        
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
      $('.txtMarksMU ').each(function () {
        
        //add only if the value is number
        if (!isNaN(this.value) && this.value.length != 0) {
          total += parseFloat(this.value);
        }
      });
      
      //Calculate the Average
      if (!isNaN(total) && total != 0) {
        
        //Get count of textboxes with class '.txtMarks'
        var txtboxes = $('.txtMarksMU ').length;
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
								  <td><?php echo '<a href="updateJResult.php?class='.$classes.'&term='.$term.'&sessions='.$sessions.'">Go Back</a>'; ?></td>
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
									    <td width="12%">CA</td>
									    <td width="10%">EXAM</td>
									    <td width="8%">TOTAL</td>
									    <td width="49%" align="left">GRADE</td>
								      </tr>
									  <tr>
									    <td align="center">English Lang/Lit.</td>
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
									    <td align="center">French</td>
									    <td align="center"><label>
									      <input name="frenchCA" type="text" class="txtMarksFrench" id="frenchCA"  value="<?php echo $rowValuefrench['cascore']; ?>" size="5" autocomplete="off">
								        </label></td>
									    <td align="center"><input name="frenchExam" type="text" class="txtMarksFrench" id="frenchExam" value="<?php echo $rowValuefrench['examscore']; ?>" size="5" autocomplete="off"></td>
									    <td align="center"><input name="frenchTotal" type="text" id="frenchTotal" value="<?php echo $rowValuefrench['totalscore']; ?>" size="5" readonly="readonly"></td>
									    <td align="left"><input name="frenchGrade" type="text" id="frenchGrade" value="<?php echo $rowValuefrench['grade']; ?>" size="5" readonly="readonly"></td>
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
									    <td align="center">Agric Science/Fishery</td>
									    <td align="center"><label>
									      <input name="agricCA" type="text" class="txtMarksAgric" id="agricCA"  value="<?php echo $rowValueagric['cascore']; ?>" size="5" autocomplete="off">
								        </label></td>
									    <td align="center"><input name="agricExam" type="text" class="txtMarksAgric" id="agricExam" value="<?php echo $rowValueagric['examscore']; ?>" size="5" autocomplete="off"></td>
									    <td align="center"><input name="agricTotal" type="text" id="agricTotal" value="<?php echo $rowValueagric['totalscore']; ?>" size="5" readonly="readonly"></td>
									    <td align="left"><input name="agricGrade" type="text" id="agricGrade" value="<?php echo $rowValueagric['grade']; ?>" size="5" readonly="readonly"></td>
								      </tr>
                                      <tr>
									    <td align="center"><font color="#FF0000">Fishery(Ignore)</font></td>
									    <td align="center"><label>
									      <input name="fisheryCA" type="text" class="txtMarksFishery" id="fisheryCA"  value="<?php echo $rowValuefishery['cascore']; ?>" size="5" readonly="readonly" autocomplete="off">
								        </label></td>
									    <td align="center"><input name="fisheryExam" type="text" class="txtMarksFishery" id="fisheryExam" value="<?php echo $rowValuefishery['examscore']; ?>" size="5" readonly="readonly" autocomplete="off"></td>
									    <td align="center"><input name="fisheryTotal" type="text" id="fisheryTotal" value="<?php echo $rowValuefishery['totalscore']; ?>" size="5" readonly="readonly"></td>
									    <td align="left"><input name="fisheryGrade" type="text" id="fisheryGrade" value="<?php echo $rowValuefishery['grade']; ?>" size="5" readonly="readonly"></td>
								      </tr>
                                      <tr>
									    <td align="center">Basic Science</td>
									    <td align="center"><label>
									      <input name="basicsciCA" type="text" class="txtMarksBasicSci" id="basicsciCA"  value="<?php echo $rowValuebasicsci['cascore']; ?>" size="5" autocomplete="off">
								        </label></td>
									    <td align="center"><input name="basicsciExam" type="text" class="txtMarksBasicSci" id="basicsciExam" value="<?php echo $rowValuebasicsci['examscore']; ?>" size="5" autocomplete="off"></td>
									    <td align="center"><input name="basicsciTotal" type="text" id="basicsciTotal" value="<?php echo $rowValuebasicsci['totalscore']; ?>" size="5" readonly="readonly"></td>
									    <td align="left"><input name="basicsciGrade" type="text" id="basicsciGrade" value="<?php echo $rowValuebasicsci['grade']; ?>" size="5" readonly="readonly"></td>
								      </tr>
                                      <tr>
									    <td align="center">Basic Technology</td>
									    <td align="center"><label>
									      <input name="basictechCA" type="text" class="txtMarksBasicTech" id="basictechCA"  value="<?php echo $rowValuebasictech['cascore']; ?>" size="5" autocomplete="off">
								        </label></td>
									    <td align="center"><input name="basictechExam" type="text" class="txtMarksBasicTech" id="basictechExam" value="<?php echo $rowValuebasictech['examscore']; ?>" size="5" autocomplete="off"></td>
									    <td align="center"><input name="basictechTotal" type="text" id="basictechTotal" value="<?php echo $rowValuebasictech['totalscore']; ?>" size="5" readonly="readonly"></td>
									    <td align="left"><input name="basictechGrade" type="text" id="basictechGrade" value="<?php echo $rowValuebasictech['grade']; ?>" size="5" readonly="readonly"></td>
								      </tr>
                                      <tr>
									    <td align="center"><font color="#FF0000">Literature(Ignore)</font></td>
									    <td align="center"><label>
									      <input name="literatureCA" type="text" class="txtMarksLiterature" id="literatureCA"  value="<?php echo $rowValueliterature['cascore']; ?>" size="5" readonly="readonly" autocomplete="off">
								        </label></td>
									    <td align="center"><input name="literatureExam" type="text" class="txtMarksLiterature" id="literatureExam" value="<?php echo $rowValueliterature['examscore']; ?>" size="5" readonly="readonly" autocomplete="off"></td>
									    <td align="center"><input name="literatureTotal" type="text" id="literatureTotal" value="<?php echo $rowValueliterature['totalscore']; ?>" size="5" readonly="readonly"></td>
									    <td align="left"><input name="literatureGrade" type="text" id="literatureGrade" value="<?php echo $rowValueliterature['grade']; ?>" size="5" readonly="readonly"></td>
								      </tr>
                                      <tr>
									    <td align="center">Physical Edu.</td>
									    <td align="center"><label>
									      <input name="phyeduCA" type="text" class="txtMarksPhyEdu" id="phyeduCA"  value="<?php echo $rowValuephyedu['cascore']; ?>" size="5" autocomplete="off">
								        </label></td>
									    <td align="center"><input name="phyeduExam" type="text" class="txtMarksPhyEdu" id="phyeduExam" value="<?php echo $rowValuephyedu['examscore']; ?>" size="5" autocomplete="off"></td>
									    <td align="center"><input name="phyeduTotal" type="text" id="phyeduTotal" value="<?php echo $rowValuephyedu['totalscore']; ?>" size="5" readonly="readonly"></td>
									    <td align="left"><input name="phyeduGrade" type="text" id="phyeduGrade" value="<?php echo $rowValuephyedu['grade']; ?>" size="5" readonly="readonly"></td>
								      </tr>
                                      <tr>
									    <td align="center">Home Economics</td>
									    <td align="center"><label>
									      <input name="homecCA" type="text" class="txtMarksHomec" id="homecCA"  value="<?php echo $rowValuehomeecons['cascore']; ?>" size="5" autocomplete="off">
								        </label></td>
									    <td align="center"><input name="homecExam" type="text" class="txtMarksHomec" id="homecExam" value="<?php echo $rowValuehomeecons['examscore']; ?>" size="5" autocomplete="off"></td>
									    <td align="center"><input name="homecTotal" type="text" id="homecTotal" value="<?php echo $rowValuehomeecons['totalscore']; ?>" size="5" readonly="readonly"></td>
									    <td align="left"><input name="homecGrade" type="text" id="homecGrade" value="<?php echo $rowValuehomeecons['grade']; ?>" size="5" readonly="readonly"></td>
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
									    <td align="center">Social Studies</td>
									    <td align="center"><label>
									      <input name="socialstdCA" type="text" class="txtMarksSocialStd" id="socialstdCA"  value="<?php echo $rowValuesocialstd['cascore']; ?>" size="5" autocomplete="off">
									      </label></td>
									    <td align="center"><input name="socialstdExam" type="text" class="txtMarksSocialStd" id="socialstdExam" value="<?php echo $rowValuesocialstd['examscore']; ?>" size="5" autocomplete="off"></td>
									    <td align="center"><input name="socialstdTotal" type="text" id="socialstdTotal" value="<?php echo $rowValuesocialstd['totalscore']; ?>" size="5" readonly="readonly"></td>
									    <td align="left"><input name="socialstdGrade" type="text" id="socialstdGrade" value="<?php echo $rowValuesocialstd['grade']; ?>" size="5" readonly="readonly"></td>
								      </tr>
                                      <tr>
									    <td align="center">Business Studies</td>
									    <td align="center"><label>
									      <input name="busstdCA" type="text" class="txtMarksBusStd" id="busstdCA"  value="<?php echo $rowValuebusstd['cascore']; ?>" size="5" autocomplete="off">
									      </label></td>
									    <td align="center"><input name="busstdExam" type="text" class="txtMarksBusStd" id="busstdExam" value="<?php echo $rowValuebusstd['examscore']; ?>" size="5" autocomplete="off"></td>
									    <td align="center"><input name="busstdTotal" type="text" id="busstdTotal" value="<?php echo $rowValuebusstd['totalscore']; ?>" size="5" readonly="readonly"></td>
									    <td align="left"><input name="busstdGrade" type="text" id="busstdGrade" value="<?php echo $rowValuebusstd['grade']; ?>" size="5" readonly="readonly"></td>
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
									    <td align="center">C.C.A</td>
									    <td align="center"><label>
									      <input name="ccaCA" type="text" class="txtMarksCCA" id="ccaCA"  value="<?php echo $rowValuecca['cascore']; ?>" size="5" autocomplete="off">
								        </label></td>
									    <td align="center"><input name="ccaExam" type="text" class="txtMarksCCA" id="ccaExam" value="<?php echo $rowValuecca['examscore']; ?>" size="5" autocomplete="off"></td>
									    <td align="center"><input name="ccaTotal" type="text" id="ccaTotal" value="<?php echo $rowValuecca['totalscore']; ?>" size="5" readonly="readonly"></td>
									    <td align="left"><input name="ccaGrade" type="text" id="ccaGrade" value="<?php echo $rowValuecca['grade']; ?>" size="5" readonly="readonly"></td>
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
									    <td align="center"><?php echo '<a href="updateJResult.php?class='.$classes.'&term='.$term.'&sessions='.$sessions.'">Go Back</a>'; ?></td>
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