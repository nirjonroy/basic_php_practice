<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "");

$username = $_POST['username'];
$email = $_POST['email'];
$passw = $_POST['passw'];

$s = "SELECT * FROM register WHERE email = '$email' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1 ) {
	echo " the user name is already is already exesist";
}

else{
	$reg = "INSERT INTO register (username, email, passw) VALUES ('$username', '$email', '$passw')";
	mysqli_query($con, $reg);
	echo "registration successful";
}

?>