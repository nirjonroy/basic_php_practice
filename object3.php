<?php
	class greeting 
	{
		public $str = "hello Developer";
		function show_greeting()
		{
			return $this->str;
		}
	}
	$obj = new greeting;
	var_dump($obj);
?>