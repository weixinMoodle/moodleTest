<<<<<<< HEAD
<html>
	<form action="http://218.94.159.104:6003/weixinMoodle/test.php" method="post">
		<lable for="username">Please input username: </lable>
		<input id="username" type="text" name="username" /> <br />
		<label for="password">Please input your password: </label> 
		<input id="password" type="text" name="password"> <br/>
		<input type="submit" />
	</form>
</html>
=======
<?php
if(isset($_POST['username'])&&isset($_POST['password'])){
	$url = "http://218.94.159.104:6003/weixinMoodle/";
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
>>>>>>> f014043e863fc5b0eec28bb3f6a2c92919606106
