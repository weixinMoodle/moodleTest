<?php  
    $username = $_POST["username"];
    $password = $_POST["password"];
    $post_data =   
                array(  
                        "username = $username",  
                        "password = $password",  
                );  
      
        $post_data = implode('&',$post_data);  
      
        $url='http://localhost:6004/weixinMoodle/test.php';  
      
        $ch = curl_init();  
        curl_setopt($ch, CURLOPT_POST, 1);  
        curl_setopt($ch, CURLOPT_URL,$url);  
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);  
         
        $result = curl_exec($ch);  
        
      
    echo $result;  
      
?>  
