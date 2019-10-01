<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hoteldb";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {
	die("Connection Failed : " .$conn->connect_error);
}

$email = $_GET["hotelemail"];
$room_type = $_GET["room"];
$check_in = $_GET["checkin"];
$check_out = $_GET["checkout"];

function dateDiff($date1, $date2) 
{
	$date1_ts = strtotime($date1);
	$date2_ts = strtotime($date2);
	$diff = $date1_ts - $date2_ts;
	return round($diff / 86400);
}

$days = datediff($check_out,$check_in);
echo $days;

$_SESSION["book_email"] = $email;
$_SESSION["room_type"] = $room_type;
$_SESSION["checkin"] = $check_in;
$_SESSION["checkout"] = $check_out;
$_SESSION["days"] = $days;
mysqli_close($conn);

?>
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
			<form name="signinform" action="login_sys_book.php" method="post" onsubmit="return chkform()">
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
