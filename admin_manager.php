<?php
session_start();
?>
<html>
	<head>
		<title>ADMIN Management Console</title>
		<link rel="stylesheet" type="text/css" href="manager_theme.css">
	</head>
	<body>
		<center>
			 <td><h1>ADMIN Management Console</h1></td>
		</center>
		<center>
				<h3><center>Welcome : <?php echo $_SESSION['admin_username']; ?></center></h3>
				<br>
						<center><button type="button" class="button" onclick = "window.location.href='user_manager.php'" /><b>Client Management Console</b></button></center><br>

						<center><button type="button" class="button" onclick = "window.location.href='hotel_manager.php'" /><b>Hotel Management Console</b></button></center><br>

						<center><button type="button" class="button" onclick = "window.location.href='Signin_Admin.php'" /><b>Logout</b></button>
						</center>
				<br>
		</center>
	</body>
</html>
