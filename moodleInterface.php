<?php
require_once (dirname(__FILE__) . '/moodleClass.php');
require_once (dirname(__FILE__) . '/getMoodleUserid.php');

function getTeacherCourses($openid) {
	$url = 'http://localhost:6003/weixinMoodle/getTeacherCourses.php';
	$userid = getMoodleUserid($openid);
	
	$post_data = "userid=$userid";
	
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
		array_push($result,$courseId);
	}
	
	return $result;
}

function getCourseNameById($courseId){
	$url = 'http://localhost:6003/weixinMoodle/getCourseNameById.php';
	$post_data = "courseId=$courseId";

	$ch = curl_init ();
	$this_header = array(
			"content-type: application/x-www-form-urlencoded;
			charset=UTF-8"
	);
	curl_setopt ( $ch,CURLOPT_HTTPHEADER,$this_header);
	curl_setopt ( $ch, CURLOPT_POST, 1 );
	curl_setopt ( $ch, CURLOPT_URL, $url );
	curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
	curl_setopt ( $ch, CURLOPT_POSTFIELDS, $post_data );

	$result = curl_exec ( $ch );
	echo $result;
	curl_close($ch);
	$resultArray = array();
	
	array_push($resultArray, $result);
	
	return $resultArray;
}

?>
