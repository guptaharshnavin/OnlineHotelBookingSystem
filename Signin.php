<html>
	<head>
		<title>Sign In</title>
		<link rel="stylesheet" type="text/css" href="login_theme.css">
	</head>
	<body>
		<center>
			 <td><h1>Sign In</h1></td>
		</center>
		<center>
			<table>
				<tr>
					<td><b>Username</b></td>
					<td><input type="text" name="username" /></td>
				</tr>
				<tr>
					<td><b>Password</b></td>
					<td><input type="password" name = "pass" /></td>
				</tr>
				<tr>
					<td><b>User Type</b></td>
					<td><b>Guest</b>
					<input type = "radio" name="usertype" value="client" /></td>
					<td><b>Hotel</b>
					<input type = "radio" name="usertype" value="hotel" /></td>
				</tr>
			</table>
			<br>
			<center>
				<button type="submit" class="button" name="save">Sign In</button>
			</center>
		</center>
	</body>
</html>
