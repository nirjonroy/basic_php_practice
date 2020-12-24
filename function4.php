<?php 
	function adder(&$str2)
	{
		$str2 ='Call By Reference';
	}
	$str2 = 'hello';
		adder($str);
		echo $str;

?>