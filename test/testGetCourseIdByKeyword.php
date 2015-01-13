<?php
require_once('../moodleInterface.php');

$result = getCourseIdByKeyword('weixin');

echo count($result);
?>