<?php
$link = mysqli_connect('localhost', 'anglican_root', '//3]r9yp14[4?(','anglican_db');
//3]r9yp14[4?(
if (!$link) {
    die('Not connected : ' . mysqli_error());
}

// make eldi the current db
$db_selected = mysqli_select_db($link,'anglican_db');
if (!$db_selected) {
    die ('Can\'t use global shipping : ' . mysqli_error($link));
}

?>