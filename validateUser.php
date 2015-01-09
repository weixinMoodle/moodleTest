<?php  
    $username = $_POST["username"];
    $password = $_POST["password"];
    $post_data = "username=$username&password=$password";
      
    $url='http://localhost:6003/weixinMoodle/authenticateUser.php';  

    //模拟post请求
    $ch = curl_init();  
    curl_setopt($ch, CURLOPT_POST, 1);  
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);  
         
    $result = curl_exec($ch); //执行post请求
    if($result=="True"){
    	echo "Success";
    }else{
    	echo "Fail";
    }
      
?>  
