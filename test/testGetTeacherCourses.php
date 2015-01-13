<?php

include (dirname(__FILE__) . '/../moodleInterface.php');

$result = getTeacherCourses('4');
echo $result[0]['CourseName'];
?>