<?php  
    $post_data =   
                array(  
                        'username=huangtao',  
                        'password=Paul_1993',  
                );  
      
        $post_data = implode('&',$post_data);  
      
        $url='http://218/94/159/104:6004/weixinMoodle/test.php';  
      
        $ch = curl_init();  
        curl_setopt($ch, CURLOPT_POST, 1);  
        curl_setopt($ch, CURLOPT_URL,$url);  
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);  
        ob_start();  
        curl_exec($ch);  
        $result = ob_get_contents() ;  
        ob_end_clean();  
      
    echo $result;  
      
      
    ?>  
