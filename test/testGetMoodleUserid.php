<?php
require_once (dirname(__FILE__) . '/../getMoodleUserid.php');

$result = getMoodleUserid("test");
echo $result;