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
			<form name="signinform" action="login_sys.php" method="post" onsubmit="return chkform()">
				<table>
					<tr>
						<td><b>Username</b></td>
						<td><input type="text" name="username" required="Please Enter Username"/></td>
					</tr>
					<tr>
						<td><b>Password</b></td>
						<td><input type="password" name = "pass" required="Please Enter Password" /></td>
					</tr>
					<tr>
						<td><b>User Type</b></td>
						<td><b>Guest</b>
						<input type = "radio" name="usertype" value="client" checked /></td>
						<td><b>Hotel</b>
						<input type = "radio" name="usertype" value="hotel" /></td>
					</tr>
				</table>
				<br>
				<center>
					<button type="submit" class="button" name="save">Sign In</button>
				</center>
				<br>
				<center>
					<button class="button" onclick = "window.location.href='forgot_pass.php'">Forgot Password</button>
				</center>
				<br>
				<center><button class="button" onclick = "window.location.href='User_Reg.php'">New User ? Sign Up Here !</button></center>
				<br>
				<center><button class="button" onclick = "window.location.href='Hotel_Reg.php'">List Your Hotel .. Click Here</button></center>
				<br>
				<center>
					<button class="button" onclick = "window.location.href='index.php'">Back To Home</button>
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
