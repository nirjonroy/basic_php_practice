<?php 
	$name = "cat";
	${$name} = "Dog";
	${${$name}} = "goat";
	echo $name . "<br/>";
	echo ${$name}. "<br/>";
	echo $cat . "<br/>";
	echo ${${$name}} . "<br>";
	echo $Dog. "<br/>";

?>