<?php  
    $username = $_POST["username"];
    $password = $_POST["password"];
    $post_data = "username=$username&password=$password";
      
    $url='http://localhost:6003/weixinMoodle/authenticateUser.php';  
      
    $ch = curl_init();  
    curl_setopt($ch, CURLOPT_POST, 1);  
    curl_setopt($ch, CURLOPT_URL,$url);  
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);  
         
    curl_exec($ch); 
      
?>  
