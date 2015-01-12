<?php

require_once('./moodleClass.php');

getTeacherCourses("1");

function getTeacherCourses($openid){
	$url='http://localhost:6003/weixinMoodle/getTeacherCourses.php';
	$post_data = "openid=$openid";
	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_URL,$url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
	
	$result = curl_exec($ch);
	curl_close ( $ch );
	
	$result = "[" . json_decode($result) . "]";
// 	$result = (Array)$result;
	
// 	foreach($result as $r=>$r_value){
// 		echo $r_value->fullname;
// 	}

	echo $result;
}

?>