<?php
session_start();
include('../data.php');
$msg = '';

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		
			for($x = 0; $x<200; $x++){
		
			$length = 8;    
			$pins = substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyz'),1,$length);
			$xsn = 0;
			$status = 1;
			$count = 1000;
			$user = '';
			$sql = "INSERT INTO pinsfortest2020 VALUES('$xsn','$pins','$status','$count','$user','$status')";
			mysqli_query($link,$sql) or die(mysqli_error($link));
			
			}
			
		
		}
?>

<form name="form1" method="post" action="">
  <label>
    <input type="submit" name="button" id="button" value="Generate Pins">
  </label>
</form>