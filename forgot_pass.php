<html>
	<head>
		<title>Forgot Password</title>
		<link rel="stylesheet" type="text/css" href="login_theme.css">
	</head>
	<body>
		<center>
			 <td><h1>Enter User Details</h1></td>
		</center>
		<center>
			<form name="signinform" action="/OnlineHotelBookingSystem/Client_Manager_Pages/user_reset_forgot.php" method="post" onsubmit="return chkform()">
				<table>
					<tr>
						<td><b>Username</b></td>
						<td><input type="text" name="username" required="Please Enter Username"/></td>
					</tr>
					<tr>
						<td><b>Mobile Number</b></td>
						<td><input type="text" name = "mnumber" maxlength="10" required /></td>
					</tr>
					<tr>
						<td><b>City</b></td>
						<td><input type="text" name = "city" maxlength="30"  required/></td>
					</tr>
					<tr>
						<td><b>Pincode</b></td>
						<td><input type="text" name = "pincode" maxlength="6"  required/></td>
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
					<button type="submit" class="button" name="save">Continue</button>
				</center>
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
			var mnumber = document.forms["signinform"]["mnumber"];
			var city = document.forms["signinform"]["city"];
			var pincode = document.forms["signinform"]["pincode"];

			if(username.value == "")
			{
				window.alert("Please Enter User Name !");
				firstname.focus();
				return false;
			}
			if(mnumber.value == "")
			{
				window.alert("Please Enter Mobile Number !");
				mnumber.focus();
				return false;
			}
			return true;
			if(city.value == "")
			{
				window.alert("Please Enter City !");
				city.focus();
				return false;
			}
			return true;
			if(pincode.value == "")
			{
				window.alert("Please Enter Pincode !");
				pincode.focus();
				return false;
			}
			return true;
		}
	</script>
</html>
