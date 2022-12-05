<?php 
error_reporting(0);
session_start();
include('../data.php');
$msg = '';
$sqlrank = "SELECT * FROM computedresult WHERE positions LIKE '%4th%'";
					$queryrank = mysqli_query($link,$sqlrank) or die(mysqli_error($link));
					$rowValuerank = mysqli_fetch_assoc($queryrank);
					do{
						//
						//echo $rowValuerank['positions'].'<br>';
						$snn = $rowValuerank['sn'];
						$my_arr = explode(" ", trim($rowValuerank['positions']));
						$newpos = $my_arr[0];
						
						
						$sqlup = "UPDATE computedresult SET positions = '$newpos' WHERE sn = '$snn'";
						mysqli_query($link,$sqlup) or die(mysqli_error($link));	
						
						
						
						}
					while($rowValuerank = mysqli_fetch_assoc($queryrank));


 ?>