<?php

include (dirname(__FILE__) . '/../moodleInterface.php');

$result = getTeacherCourses('test');
echo $result[0]['CourseName'];
?>