<?php
session_start();
include('data.php');
$msg = '';
$pinmsg = '';

		
		$term = $_SESSION['termToDisplay'];
		$sessions = $_SESSION['sessionsToDisplay'];
		$classes = $_SESSION['classToDisplay'];
		$studentname = $_SESSION['studentnameToDisplay'];
		
		
		$sqlcompute = "SELECT * FROM scomputedresult WHERE studentname = '$studentname' AND class = '$classes' AND term = '$term' AND session = '$sessions' LIMIT 1";
				$querycompute = mysqli_query($link,$sqlcompute) or die(mysqli_error($link));
				$rowValuecompute = mysqli_fetch_assoc($querycompute);
				
				
				
				////////////////////////////////////////////////////////////////////////////////////////////
				////////////////////Newly Added//////////////////////////////////////////
				
		$sqlcomputeNoInClass = "SELECT * FROM scomputedresult WHERE class = '$classes' AND term = '$term' AND session = '$sessions'";
				$querycomputeNoInClass = mysqli_query($link,$sqlcomputeNoInClass) or die(mysqli_error($link));
				$rowValuecomputeNoInClass = mysqli_fetch_assoc($querycomputeNoInClass);
				$rowValuecomputeNoInClassCount = mysqli_num_rows($querycomputeNoInClass);
				
				////////////////////////////////////////////////////////////////////////////////////////////
				
				
				
				
				
				$sqlsex = "SELECT * FROM sstudentsexamsrecordtb WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions' LIMIT 1";
				$querysex = mysqli_query($link,$sqlsex) or die(mysqli_error($link));
				$rowValuesex = mysqli_fetch_assoc($querysex);		
				
				
				
				/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
				
		
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
		
		
		$sqlgeo = "SELECT * FROM sgeography WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		$querygeo = mysqli_query($link,$sqlgeo) or die(mysqli_error($link));
		$rowValuegeo = mysqli_fetch_assoc($querygeo);
		
		
		$sqlcivic = "SELECT * FROM scivicedu WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		$querycivic = mysqli_query($link,$sqlcivic) or die(mysqli_error($link));
		$rowValuecivic = mysqli_fetch_assoc($querycivic);
		
		
		$sqlfnut = "SELECT * FROM sfoodnut WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		$queryfnut = mysqli_query($link,$sqlfnut) or die(mysqli_error($link));
		$rowValuefnut = mysqli_fetch_assoc($queryfnut);
		
		
		$sqlanihus = "SELECT * FROM sanimalhus WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		$queryanihus = mysqli_query($link,$sqlanihus) or die(mysqli_error($link));
		$rowValueanihus = mysqli_fetch_assoc($queryanihus);
		
		
		$sqlmusic = "SELECT * FROM smusic WHERE studentname = '$studentname' AND classes = '$classes' AND term = '$term' AND sessions = '$sessions'";
		$querymusic = mysqli_query($link,$sqlmusic) or die(mysqli_error($link));
		$rowValuemusic = mysqli_fetch_assoc($querymusic);
		
		//rowValuemusic
		
		
		
				
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
            <td align="center"><strong>Accounting</strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValueacct['cascore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValueacct['examscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValueacct['totalscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValueacct['grade']; ?></font></strong></td>
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
            <td align="center"><strong>TOTAL SCORE</strong></td>
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
            <td align="center"><strong><em><font color="#990000"><?php echo $rowValuecompute['totalscore']; ?></font></em></strong></td>
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
            <td align="center"><strong>Physics</strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuephy['cascore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuephy['examscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuephy['totalscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuephy['grade']; ?></font></strong></td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center"><strong>AVERAGE SCORE</strong></td>
          </tr>
          <tr>
            <td align="center"><strong>Chemistry</strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuechem['cascore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuechem['examscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuechem['totalscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuechem['grade']; ?></font></strong></td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center"><strong><em><font color="#990000"><?php echo $rowValuecompute['average']; ?></font></em></strong></td>
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
            <td align="center"><strong>Biology</strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuebio['cascore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuebio['examscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuebio['totalscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuebio['grade']; ?></font></strong></td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center"><strong>POSITION</strong></td>
          </tr>
          <tr>
            <td align="center"><strong>Economics</strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValueecons['cascore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValueecons['examscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValueecons['totalscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValueecons['grade']; ?></font></strong></td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center"><strong><em><font color="#990000"><?php echo substr($rowValuecompute['positions'],0,4); ?></font></em></strong></td>
          </tr>
          <tr>
            <td align="center"><strong>C.R.S</strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuecrs['cascore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuecrs['examscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuecrs['totalscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuecrs['grade']; ?></font></strong></td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">No. In Class: <font color="#990000"><?php echo $rowValuecomputeNoInClassCount; ?></font></td>
          </tr>
          <tr>
            <td align="center"><strong>Government</strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuegovt['cascore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuegovt['examscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuegovt['totalscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuegovt['grade']; ?></font></strong></td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center"><strong>PASS/FAIL</strong></td>
          </tr>
          <tr>
            <td align="center"><strong>Geography</strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuegeo['cascore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuegeo['examscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuegeo['totalscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuegeo['grade']; ?></font></strong></td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center"><strong><em><font color="#990000">
              <?php if(($rowValuemaths['totalscore']>= 45 || $rowValueenglish['totalscore']>= 45) && $rowValuecompute['average'] >= 45){
						echo 'Passed';
						
						
						}
						else {
							echo 'Failed';
							}
							?>
            </font></em></strong></td>
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
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center"><strong>Food &amp; Nutrition</strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuefnut['cascore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuefnut['examscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuefnut['totalscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuefnut['grade']; ?></font></strong></td>
            <td align="center">&nbsp;</td>
            <td colspan="3" align="center"><strong>Name of Principal :</strong><em> <strong><font color="#006699">
                
                
                
                
                <?php
                if(intval(substr($sessions,0,-4)) >= 2022){
                
                    echo 'Mr. Chris C. Njoku';
                
                }
                else if(intval(substr($sessions,0,-4)) <= 2021){
                    
                    echo 'Mrs Ajuzie E.U';
                    
                }
                
                ?>
                
                
                
                </font></strong></em></td>
            </tr>
          <tr>
            <td align="center"><strong>Animal Husbandry</strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValueanihus['cascore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValueanihus['examscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValueanihus['totalscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValueanihus['grade']; ?></font></strong></td>
            <td align="center">&nbsp;</td>
            <td colspan="3" rowspan="2" align="center">
                
                <?php
                if(intval(substr($sessions,0,-4)) >= 2022){
                
                    echo '<img src="images/signature3.png" width="101" height="43" alt="" />';
                
                }
                else if(intval(substr($sessions,0,-4)) <= 2021){
                    
                    echo '<img src="images/signature2.png" width="101" height="43" alt="" />';
                    
                }
                
                ?>
                
                
                </td>
            </tr>
          <tr>
            <td align="center"><strong>Music</strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuemusic['cascore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuemusic['examscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuemusic['totalscore']; ?></font></strong></td>
            <td align="center"><strong><font color="#006699"><?php echo $rowValuemusic['grade']; ?></font></strong></td>
            <td align="center">&nbsp;</td>
            </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
<button class="print-link avoid-this"> Print Result</button>
<p><a href="resultchecker.php">Back To Result Checker Page</a></p>
</div>
</body>
</html>