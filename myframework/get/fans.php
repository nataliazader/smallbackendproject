<?php

include '../class/model.php';
include '../class/connection.php';

$page_id = $_GET['page_id'];
$format = $_GET['format'];

$db = new db_connection();
$conn = $db->connect();

$model=new model();
$array=$model->select('fans',$conn); 

if($format=='linechart'){	
	foreach($array as $value){
		$arr[] = array( "date"=>$value['time'],"value"=>(int)$value['fan_count']);
	}
	
	$obj=(object)array("error"=>false,"data"=>$arr);
	echo json_encode($obj,true);
	exit();	
}

if($format=='table'){
	$arr=array();
	foreach($array as $value){
		$arr[$value['time']]  = (int)$value['fan_count'];
	}
	$obj=array("error"=>false,"data"=>$arr);
	echo json_encode($obj);
	exit();		
}

if($format=='multiplepage'){
	foreach($array as $value){
		$arr[] = array( "date"=>$value['time'],"value"=>(int)$value['fan_count']);
	}
	$cocacola=(object)array("cocacola"=>$arr);
	$obj=array("error"=>false,"data"=>$cocacola);
	echo json_encode($obj);
	exit();		
}

?>