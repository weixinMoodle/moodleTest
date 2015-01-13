<?php

include (dirname(__FILE__) . '/../moodleInterface.php');

$result = getCourseIdByKeyword('weixin');

echo $result[0];
?>