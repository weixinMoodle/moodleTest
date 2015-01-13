<?php
   session_start();
    $username = "huangtao";
    $password = "Paul_1993";
//     $weixin = $_POST["weixin_num"];
    
    $post_data = "username=$username&password=$password";
      
    $url='http://localhost:6003/weixinMoodle/authenticateUser.php';  

    //模拟post请求
    $ch = curl_init();  
    curl_setopt($ch, CURLOPT_POST, 1);  
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);  
         
    $result = curl_exec($ch); //执行post请求
    echo $result;
//     if($result=="True"){
//         $_SESSION['weixin'] = $weixin;
//         $_SESSION['username'] = $username;
//         $_SESSION['password'] = $password;
//     	echo "<script>location.href='infoadd_view.php';</script>";//跳转至信息补充界面；
//     }else{
//         echo "<meta http-equiv='Content-Type'' content='text/html; charset=utf-8'>";
//     	echo "验证失败！";
//     }
      
?>  
