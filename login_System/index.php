<!DOCTYPE html>
<html>
<head>
	<title>Nirjon Roy</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">	
	<script type="text/javascript"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6">
		<form action="registration.php" method="post">
			<h1>Registration Form</h1>
			<table style="font:times new Roman">
				<tr>
					<td>User Name</td>
					<td><input type="text" name="username" style="background:#0EBE8E; color:white; font-weight: bolder; border-color: red"></td>
				</tr>
				<tr>
					<td>Email Address</td>
					<td><input type="email" name="email" style="background:#0EBE8E; color:white; font-weight: bolder;border-color: red"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="Password" name="passw" style="background:#0EBE8E; color:white; font-weight: bolder; border-color: red"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" class="btn btn-primary"></td>
				</tr>				
			</table>
		</form>

	</div>
		<div class="col-sm-6">
		
		<form action="login.php" method="post">
			<h1>Login Form</h1>
			<table style="font:times new Roman">
				<tr>
					<td>Email Address</td>
					<td><input type="email" name="email" style="background:#0EBE8E; color:white; font-weight: bolder;border-color: red"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="Password" name="passw" style="background:#0EBE8E; color:white; font-weight: bolder; border-color: red"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="login" class="btn btn-primary"></td>
				</tr>				
			</table>
		</form>
		</div>
</div>
	</div>

</body>
</html>