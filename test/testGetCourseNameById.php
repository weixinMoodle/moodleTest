<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php

include (dirname(__FILE__) . '/../moodleInterface.php');

$result = getCourseNameById('3');

if(count($result) == 0){
	echo "Course not found";
}else{
	echo $result[0];
}
?>

</html>