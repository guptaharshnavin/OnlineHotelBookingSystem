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
					<td><b>First Name</b></td>
					<td><?php echo $_SESSION['firstname']; ?></td>
				</tr>
				<tr>
					<td><b>Last Name</b></td>
					<td><?php echo $_SESSION['lastname']; ?></td>
				</tr>
				<tr>
					<td><b>User Type</b></td>
					<td>Client</td>
				</tr>
			</table>
			<br>
			<center>
				<button type="button" class="button" onclick = "window.location.href='signin.php'" />Sign In</button>
			</center>
		</center>
	</body>
