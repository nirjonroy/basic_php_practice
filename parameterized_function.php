<?php 
function add($x,$y)
{
	$sum = $x + $y;
	echo "sum = $sum <br> <br> ";
}
function sub($x, $y){
	$sub = $x-$y;
	echo "sub = $sub <br> <br/>";
}
if(isset($_POST['add'])){
	add($_POST['first'], $_POST['second']);
}
if(isset($_POST['sub'])){
	sub($_POST['first'], $_POST['second']);
}

?>
<form method="post">
	Enter First Number: <input type="Number" name="first"><br><br>
	Enter Second Number : <input type="Number" name="Second">  <br> <br>
	<input type="submit" name="add" value="addition">
	<input type="submit" name="sub" value="Subtraction">
</form>