<?php

include (dirname(__FILE__) . '/../moodleInterface.php');

$result = getTeacherCourses('4');
echo "hello";
echo json_encode($result);
echo "\n";
echo $result[0];
?>