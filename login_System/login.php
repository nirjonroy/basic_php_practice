<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "userreg");

$username = $_POST['username'];
$email = $_POST['email'];
$passw = $_POST['passw'];

$s = "SELECT * FROM register WHERE email = '$email' && passw = '$passw' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);


if($num == 1) {
	$_SESSION['username'] = $username;
	
	header('location:home.php');
}


else{

	header('location: index.php');
}
?>