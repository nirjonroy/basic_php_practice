<?php 
	$handle = fopen("code.txt", "r");
	var_dump($handle);
	echo "<br>";
	$conn = ftp_connect("127.0.0.1") or die("could not connect");
	var_dump($conn);

?>