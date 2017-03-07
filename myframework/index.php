<?php

include 'class/model.php';
include 'class/connection.php';

$app_id='ENTER YOUR APP_ID';
$app_secret='ENTER YOUR APP_SECRET';
$fb_page_id='cocacola'; //id for cocacola page on facebook

$url='https://graph.facebook.com/'.$fb_page_id.'?access_token='.$app_id.'|'.$app_secret.'&fields=fan_count';

$json_data = file_get_contents($url);

$data = json_decode($json_data,true);
$newdata = array();

foreach($data as $key=>$value){
	if($key=='id')
		$newdata['fb_page_id']=$value;
	else
		$newdata[$key]=$value;
}
 
$time=time();
$newdata['time']=$time;
 
$db = new db_connection();
$conn=$db->connect();

$model=new model();
$model->insert('fans',$newdata,$conn);
$db->close();

//CREATE TABLE `facebook`.`fans` ( `id` INT NOT NULL AUTO_INCREMENT , `fb_page_id` INT NOT NULL , `fan_count` INT NOT NULL , `time` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

?>