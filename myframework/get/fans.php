<?php

$page_id = $_GET['page_id'];
$format = $_GET['format']; 

if($format=='table')
	header('Location: table.php?page_id='.$page_id);

?>