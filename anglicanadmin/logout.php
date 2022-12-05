<?php
include('../data.php');
session_start();
//session_destroy();

$sn = $_SESSION['key'];

mysqli_query($link,"UPDATE admin SET loginstatus = 0 WHERE sn = '$sn' LIMIT 1") or die(mysqli_error($link));
unset($_SESSION['key']);
header('Location: index.php');
?>