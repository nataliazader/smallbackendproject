<?php

include '../model.php';
include '../connection.php';

$db = new db_connection();
$conn = $db->connect();

$model=new model();
$array=$model->select('fans',$conn);
$arr["data"]=array();

foreach($array as $key=>$value)
	$arr["data"][$key]=$value;

$json=json_encode($arr);
header('Content-type:application/json');
echo $json;

?>