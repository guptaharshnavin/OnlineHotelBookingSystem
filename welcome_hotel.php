<?php
session_start();
?>
<html>
	<head>
		<title>Welcome</title>
		<link rel="stylesheet" type="text/css" href="login_theme.css">
	</head>
	<body>
		<center>
			 <td><h1>Welcome ! Registration Successful</h1></td>
		</center>
		<center>
			<table>
				<tr>
					<td><b>Username</b></td>
					<td><?php echo $_SESSION['username']; ?></td>
				</tr>
				<tr>
					<td><b>Hotel Name</b></td>
					<td><?php echo $_SESSION['hotelname']; ?></td>
				</tr>
				<tr>
					<td><b>License Number</b></td>
					<td><?php echo $_SESSION['licenseno']; ?></td>
				</tr>
				<tr>
					<td><b>User Type</b></td>
					<td>Hotel</td>
				</tr>
			</table>
			<br>
			<center>
				<button type="button" class="button" onclick = "window.location.href='signin.php'" />Sign In</button>
			</center>
		</center>
	</body>
