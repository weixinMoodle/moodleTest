<?php
require_once (dirname(__FILE__) . '/moodleClass.php');
function getTeacherCourses($openid) {
	$url = 'http://localhost:6003/weixinMoodle/getTeacherCourses.php';
	$post_data = "openid=$openid";
	
	$ch = curl_init ();
	curl_setopt ( $ch, CURLOPT_POST, 1 );
	curl_setopt ( $ch, CURLOPT_URL, $url );
	curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
	curl_setopt ( $ch, CURLOPT_POSTFIELDS, $post_data );
	
	$response = curl_exec ( $ch );
	curl_close ( $ch );
	
	$responseList = json_decode ( $response );
	$result = array();
	
	for($x = 0; $x < count($responseList); $x ++) {
		$courseId = $responseList[$x]->id;
		$courseName = $responseList[$x]->fullname;
		echo $courseId;
		echo $courseName;
		$courseArray = array("CourseID"=>"$courseId","CourseName"=>"$courseName");
		array_push($result,$courseArray);
	}
	
	return $result;
}

function getCourseIdByKeyword($keyword){
	$url = 'http://localhost:6003/weixinMoodle/getCourseIdByKeyword.php';
	$post_data = "keyword=$keyword";
	
	$ch = curl_init ();
	curl_setopt ( $ch, CURLOPT_POST, 1 );
	curl_setopt ( $ch, CURLOPT_URL, $url );
	curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
	curl_setopt ( $ch, CURLOPT_POSTFIELDS, $post_data );
	
	$response = curl_exec ( $ch );
	curl_close($ch);
	
	$responseList = json_decode($response);
	$result = array();
	
	for($x = 0; $x<count($responseList); $x ++){
		$courseId = $responseList[$x]->id;
// 		echo $courseId;
		array_push($result,$courseId);
	}
	
	return $result;
}

$result = getCourseIdByKeyword("weixin");
echo $result[0];
?>
