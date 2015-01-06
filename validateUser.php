<?php
if(isset($_POST['username'])&&isset($_POST['password'])){
	$url = "http://218.94.159.104:6003/weixinMoodle/test.php";
	$username = $_POST['username'];
	$password = $_POST['password'];
	$data = array('username' => $username, 'password' => $password);
	$result = postData($url,$data);
	echo $result;
}

function postData($url,$data){
	$ch = curl_init();
	$timeout = 999999;
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	$result = curl_exec($ch);
	curl_close($ch);
	return $result;
}
?>
