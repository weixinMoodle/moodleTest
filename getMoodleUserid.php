<?php
   
function getMoodleUserid($openid){
    require_once('../myconfig.php');
    ini_set('display_errors', "on");//设置开启错误提示
    error_reporting(E_ALL);//错误等级提示
  
    $sql = "SELECT * FROM wx_verified WHERE openid = '$openid'";
    //global $conn;
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    $moodle_uid=$row['moodle_uid'];
    return $moodle_uid;
}

?>
