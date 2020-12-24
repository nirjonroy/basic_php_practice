<?php 
	$emp = array(

		array(1, "abc", 4100),
		array(2, "pqr", 5000), 
		array(3, "xyz", 30000)

	);
	for($row = 0; $row<3; $row++){
		for($col =0; $col<3; $col++){
			echo $emp[$row][$col]. "";
		}
		echo "<br>";
		}

?>