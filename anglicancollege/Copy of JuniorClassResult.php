<?php
session_start();
include('data.php');
$msg = '';
$pinmsg = '';

		
		$term = $_SESSION['termToDisplay'];
		$sessions = $_SESSION['sessionsToDisplay'];
		$classes = $_SESSION['classToDisplay'];
		$studentname = $_SESSION['studentnameToDisplay'];
		
		
		$sqlcompute = "SELECT * FROM computedresult WHERE studentname = '$studentname' AND class = '$classes' AND term = '$term' AND session = '$sessions' LIMIT 1";
				$querycompute = mysqli_query($link,$sqlcompute) or die(mysqli_error($link));
				$rowValuecompute = mysqli_fetch_assoc($querycompute);
				
				$sqlsex = "SELECT * FROM jstudentsexamsrecordtb WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions' LIMIT 1";
				$querysex = mysqli_query($link,$sqlsex) or die(mysqli_error($link));
				$rowValuesex = mysqli_fetch_assoc($querysex);		
				
				
				
				/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
				
		
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
		
		
		
				
				/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		
				
/* 			
		if($msg == ''){
			
			$classSubString = substr($class,0,3);
			$use1 = 1;
			$use0 = 0;
			
			if($classSubString  == 'JSS'){
				
					$sqlJ1 = "SELECT * FROM pinsfortest WHERE pinnumber = '$cardpin' AND inusestatus = '$use1' AND usedby = '$studentname' LIMIT 1";
					$queryJ1 = mysqli_query($link,$sqlJ1) or die(mysqli_error($link));
					$rowValueJ1 = mysqli_fetch_assoc($queryJ1);
					$rowNumberJ1 = mysqli_num_rows($queryJ1);
		
						if($rowNumberJ1 == 1){
							
							header('Location:JuniorClass Result.php');
			
						}
			
						else{
				
							$sqlJ0 = "SELECT * FROM pinsfortest WHERE pinnumber = '$cardpin' AND inusestatus = '$use0' LIMIT 1";
							$queryJ0 = mysqli_query($link,$sqlJ0) or die(mysqli_error($link));
							$rowValueJ0 = mysqli_fetch_assoc($queryJ0);
							$rowNumberJ0 = mysqli_num_rows($queryJ0);
							
							if($rowNumberJ0 == 1){
							
								
								$sqlJ0 = "UPDATE pinsfortest SET usedby = '$studentname', inusestatus = 1 WHERE pinnumber = '$cardpin' LIMIT 1";
								$queryJ0 = mysqli_query($link,$sqlJ0) or die(mysqli_error($link));
								
								
								header('Location:JuniorClass Result.php');
			
							}
				
							else{
								
									$pinmsg = 'Invalid Pin';
									
								}
							
						} 
					
			
			}	
			
			else if($classSubString  == 'SSS'){
				
				echo 'SSSSS';
				
				}
				
			
		} */
		
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $studentname.' '. $term.' '.$classes.' '.$sessions.' Session '; ?> Result</title>
<head>
        <title>Print Page or Section of Page using JQuery : DevZone.co.in </title>
        <link rel="stylesheet" type="text/css" href="print.css" media="print">

        <style>
            .main { 
                width: 900px; 
                margin: auto; 
                height: 1150px;
                border: 1px solid #ccc;
                padding: 20px;
            }

            .header{
                height: 100px;    
            }
            .content{    
                height: 700px;
                border-top: 1px solid #ccc;
                padding-top: 15px;
				
            }
            .footer{
                height: 100px;  
                bottom: 0px;
            }
            .heading{
                color: #FF5B5B;
                margin: 10px 0;
                padding: 10px 0;
                font-family: trebuchet ms;
            }
            /*downloaded from http://devzone.co.in*/

            .print_div{


                border: 2px dashed #92AAB0;
                color: #92AAB0;
                display: table-cell;
                height: 750px;
                overflow-y: auto;
                padding: 10px 10px 10px 10px;
                text-align: justify;
                vertical-align: middle;
                width: 867px;
                float: left;
                margin-bottom: 20px;
				margin: 0 auto;

            }
            .classname {
                background: -moz-linear-gradient(center top , #3D94F6 5%, #1E62D0 100%) repeat scroll 0 0 #3D94F6;
                border: 1px solid #337FED;
                border-radius: 6px;
                box-shadow: 0 1px 0 0 #97C4FE inset;
                color: #FFFFFF;
                display: inline-block;
                font-size: 15px;
                font-style: normal;
                font-weight: normal;
                height: 27px;
                text-align: center;
                text-decoration: none;
                text-indent: 0;
                text-shadow: 1px 1px 0 #1570CD;
                width: 100px;
            }
			
        </style>
</head>

<body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
            <script src="jQuery.print.js"></script> 
            <script>
                $(document).ready(function() {
                    $(".print_div").find('button').on('click', function() {

                        var dv_id = $(this).parents(".print_div").attr('id');

                        //Print ele4 with custom options
                        $('#' + dv_id).print({
                            //Use Global styles
                            globalStyles: false,
                            //Add link with attrbute media=print
                            mediaPrint: false,
                            //Custom stylesheet
                            stylesheet: "http://fonts.googleapis.com/css?family=Inconsolata",
                            //Print in a hidden iframe
                            iframe: true,
                            //Don't print this
                            noPrintSelector: ".avoid-this"
                        });
                    });
                });
            </script>
            <div id='print-div3' class="print_div">
            <style type="text/css">
                            table.gridtable {
                                font-family: verdana,arial,sans-serif;
                                font-size:11px;
                                color:#333333;
                                border-width: 1px;
                                border-color: #666666;
                                border-collapse: collapse;
								a
                            }
                            table.gridtable th {
                                border-width: 1px;
                                padding: 8px;
                                border-style: solid;
                                border-color: #666666;
                                background-color: #dedede;
                            }
                            table.gridtable td {
                                border-width: 1px;
                                padding: 8px;
                                border-style: solid;
                                border-color: #666666;
                                background-color: #ffffff;
                            }
                        </style>

            
<table width="100%" border="1">
  <tr>
    <td><table width="100%" border="0">
      <tr>
        <td><table width="100%" border="1">
          <tr>
            <td align="center"><img name="" src="images/logo.png" width="312" height="57" alt="" /></td>
          </tr>
          <tr>
            <td align="center"><strong>P.O Box 15, Owerrinta , Isiala Ngwa South L.G.A, Abia State</strong></td>
          </tr>
          <tr>
            <td><table width="100%" border="1">
              <tr>
                <td width="38%"><strong>Students Name: <font color="#006699"><?php echo $studentname; ?></font></strong></td>
                <td width="14%"><strong>Class: <font color="#006699"><?php echo $classes; ?></font></strong></td>
                <td width="16%"><strong>Term: <font color="#006699"><?php echo $term; ?></font></strong></td>
                <td width="20%"><strong>Session: <font color="#006699"><?php echo $sessions; ?></font></strong></td>
                <td width="12%"><strong>Sex: <font color="#006699"><?php echo $rowValuesex ['gender']; ?></font></strong></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td align="center"><strong>STUDENT REPORT CARD <?php echo strtoupper($term); ?></strong></td>
      </tr>
      <tr>
        <td><table width="100%" border="1" align="center">
          <tr>
            <td width="20%" align="center"><strong>SUBJECTS</strong></td>
            <td width="8%" align="center"><strong>CA</strong></td>
            <td width="9%" align="center"><strong>EXAM</strong></td>
            <td width="10%" align="center"><strong>TOTAL</strong></td>
            <td width="7%" align="center"><strong>GRADE</strong></td>
            <td width="7%" align="center">&nbsp;</td>
            <td width="16%" align="center">&nbsp;</td>
            <td width="5%" align="center">&nbsp;</td>
            <td width="18%" align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center"><strong>English Language</strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValueenglish['cascore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValueenglish['examscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValueenglish['totalscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValueenglish['grade']; ?></font></strong></td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center"><strong>Mathematics</strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuemaths['cascore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuemaths['examscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuemaths['totalscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuemaths['grade']; ?></font></strong></td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center"><strong>French</strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuefrench['cascore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuefrench['examscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuefrench['totalscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuefrench['grade']; ?></font></strong></td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center"><strong>Igbo Language</strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValueigbo['cascore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValueigbo['examscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValueigbo['totalscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValueigbo['grade']; ?></font></strong></td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center"><strong>Computer Studies</strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuecomputer['cascore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuecomputer['examscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuecomputer['totalscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuecomputer['grade']; ?></font></strong></td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center"><strong>Agric Science</strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValueagric['cascore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValueagric['examscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValueagric['totalscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValueagric['grade']; ?></font></strong></td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center"><strong>Fishery</strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuefishery['cascore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuefishery['examscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuefishery['totalscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuefishery['grade']; ?></font></strong></td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center"><strong>Basic Science</strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuebasicsci['cascore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuebasicsci['examscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuebasicsci['totalscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuebasicsci['grade']; ?></font></strong></td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center"><strong>Basic Tech</strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuebasictech['cascore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuebasictech['examscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuebasictech['totalscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuebasictech['grade']; ?></font></strong></td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center"><strong>Literature In English</strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValueliterature['cascore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValueliterature['examscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValueliterature['totalscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValueliterature['grade']; ?></font></strong></td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center"><strong>Physical Education</strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuephyedu['cascore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuephyedu['examscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuephyedu['totalscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuephyedu['grade']; ?></font></strong></td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center"><strong>Home Economics</strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuehomeecons['cascore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuehomeecons['examscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuehomeecons['totalscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuehomeecons['grade']; ?></font></strong></td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center"><strong>C.R.S</strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuecrs['cascore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuecrs['examscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuecrs['totalscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuecrs['grade']; ?></font></strong></td>
            <td align="center">&nbsp;</td>
            <td align="center"><strong>TOTAL SCORE</strong></td>
            <td align="center">&nbsp;</td>
            <td align="center"><strong>AVERAGE SCORE</strong></td>
          </tr>
          <tr>
            <td align="center"><strong>Social Studies</strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuesocialstd['cascore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuesocialstd['examscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuesocialstd['totalscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuesocialstd['grade']; ?></font></strong></td>
            <td align="center">&nbsp;</td>
            <td align="center"><strong><em><font color="#990000"><?php echo $rowValuecompute['totalscore']; ?></font></em></strong></td>
            <td align="center">&nbsp;</td>
            <td align="center"><strong><em><font color="#990000"><?php echo $rowValuecompute['average']; ?></font></em></strong></td>
          </tr>
          <tr>
            <td align="center"><strong>Business Studies</strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuebusstd['cascore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuebusstd['examscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuebusstd['totalscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuebusstd['grade']; ?></font></strong></td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center"><strong>POSITION</strong></td>
          </tr>
          <tr>
            <td align="center"><strong>Civic Education</strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuecivic['cascore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuecivic['examscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuecivic['totalscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuecivic['grade']; ?></font></strong></td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center"><strong><em><font color="#990000"><?php echo $rowValuecompute['positions']; ?></font></em></strong></td>
          </tr>
          <tr>
            <td align="center"><strong>C.C.A</strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuecca['cascore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuecca['examscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuecca['totalscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuecca['grade']; ?></font></strong></td>
            <td align="center">&nbsp;</td>
            <td align="center"><strong>Principal Signature</strong></td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
<button class="print-link avoid-this"> Print Result</button>


</div>
</body>
</html>