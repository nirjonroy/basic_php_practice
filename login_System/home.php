<?php 
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body>
<a href="logout.php">logout</a>
<h1>welcome <?php echo $_SESSION['username']; ?></h1>
<?php
$name = "";
$sesson = "";
$result = "";

 if(isset($_POST['search'])){
 	$roll = $_POST['roll'];
 	$connect = mysqli_connect("localhost", "root", "", "stsc");
 	$query ="SELECT  `name`, `sesson`, `result` FROM `result7th` WHERE `roll` = $roll LIMIT 1";
 	$res = mysqli_query($connect, $query);

 	while($row = mysqli_fetch_array($res))
 	{
 		$name = $row['name'];
		$sesson = $row['sesson'];
		$result = $row['result'];
 	}
 	 mysqli_free_result($res);
 mysqli_close($connect);
 }
 else{
		
$name = "";
$sesson = "";
$result = "";

 }


 ?>



<form  action="home.php" method="post">
	Roll: <input type="text" name="roll"><br/>
	Name : <input type="text" name="name" value="<?php echo $name ?>"><br/>
	Sesson: <input type="text" name="sesson" value="<?php echo $sesson ?>"> <br/>
	Result : <input type="text" name="result" value="<?php echo $result ?>"> <br/>
	<input type="submit" name="search" value="find">

</form>

</body>
</html>