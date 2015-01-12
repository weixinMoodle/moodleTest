<?php

class Moodle_Class{
	public $courseId;
	public $courseName;
	
	function __construct($courseId, $courseName){
		$this -> courseId = $courseId;
		$this -> courseName = $courseName;
	}
}

?>