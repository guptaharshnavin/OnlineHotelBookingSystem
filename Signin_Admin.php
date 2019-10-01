<html>
	<head>
		<title>ADMIN - Sign In</title>
		<link rel="stylesheet" type="text/css" href="login_theme.css">
	</head>
	<body>
		<center>
			 <td><h1>ADMIN - Sign In</h1></td>
		</center>
		<center>
			<form name="signinform" action="login_admin.php" method="post" onsubmit="return chkform()">
				<table>
				<tr><td><center>Note : Access To Admin Controls Only Available To Authorised Users. LOGIN For Normal Users Not Available Through This Page</center></td></tr>
				</table>
				<br>
				<table>
					<tr>
						<td><b>Username</b></td>
						<td><input type="text" name="username" required="Please Enter Username"/></td>
					</tr>
					<tr>
						<td><b>Password</b></td>
						<td><input type="password" name = "pass" required="Please Enter Password" /></td>
					</tr>
				</table>
				<br>
				<center>
					<button type="submit" class="button" name="save">Sign In</button>
				</center>
			</form>
		</center>
	</body>
	<script>
		function chkform()
		{
			var username = document.forms["signinform"]["username"];
			var password = document.forms["signinform"]["pass"];

			if(username.value == "")
			{
				window.alert("Please Enter User Name !");
				firstname.focus();
				return false;
			}
			if(password.value == "")
			{
				window.alert("Please Enter Password !");
				lastname.focus();
				return false;
			}
			return true;
		}
	</script>
</html>
