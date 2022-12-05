<?php 
session_start();
include('data.php');
$msg = '';
$i = 0;

$sql = "SELECT * FROM pinsfortest ORDER BY status DESC";
$query = mysqli_query($link,$sql) or die(mysqli_error($link));
$rowValue = mysqli_fetch_assoc($query);

$grades = array();

do {
    $grades[] = $rowValue['status'];
}while($rowValue = mysqli_fetch_assoc($query));


//$grades = array(92, 84, 84, 84, 83, 65, 41, 38, 38, 37);
$occurrences = array_count_values($grades);
$grades = array_unique($grades);
foreach($grades as $grade) {
    echo str_repeat($grade .' - '.ordinal(($i+1)).'<br>',$occurrences[$grade]);
    $i += $occurrences[$grade];
}


function ordinal($number) {
    $ends = array('th','st','nd','rd','th','th','th','th','th','th');
    if ((($number % 100) >= 11) && (($number%100) <= 13))
        return $number. 'th';
    else
        return $number. $ends[$number % 10];
}
//Example Usage
//echo ordinal(100);

/* function getTopRanksUser($id) {
$userPos ="Ranked position is:";
  $count = 0;
  $sql = "SELECT sn FROM pinsfortest ORDER BY sn DESC ";
  $r = mysql_query($sql);
  if ( $r !== false && mysql_num_rows($r) > 0 ) {
    while ( $a = mysql_fetch_assoc($r) ) {
       $count = $count+1;
       $userPosCount = $userPos+$count;

       return $userPosCount;

  }
 }

}



		$sql = "SELECT * FROM pinsfortest";
		$query = mysqli_query($link,$sql) or die(mysqli_error($link));
		$rowValue = mysqli_fetch_assoc($query);
		
		do{
			
			echo getTopRanksUser(1);
			
		} while($rowValue = mysqli_fetch_assoc($query));
	 */

?>