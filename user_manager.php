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

?>
<html>
	<head>
		<title>Client Management Console</title>
		<link rel="stylesheet" type="text/css" href="manager_theme.css">
	</head>
	<body>
		<center>
			 <td><h1>Client Management Console</h1></td>
		</center>
		<center>
				<h3><center>Welcome : <?php echo $_SESSION['admin_username']; ?></center></h3>
			<div>
				<center>
				<h3>Manage Client Account Status</h3>
				<table>
					<tr>
						<th>Username : </th>
						<td><input type="text" name="emailid" id="emailid" maxlength="50" /></td>
					</tr>
					<tr>
						<th>Action</th>
						<td>
							 <select id="action_type">
								<option value="act">Activate Account</option>
								<option value="deact">Deactivate Account</option>
							  </select> 
						</td>
					</tr>
				</table>
				<br>
				<center><button class = "button" onclick="changeStatus(document.getElementById('emailid').value,document.getElementById('action_type').value)">Submit</button></center>
				<p><h4><span id="actionresponse"></span></h4></p></center>
			</div>
			<br>
			<div>
				<center><h3>Reset Client Account Password</h3>
				<table>
					<tr>
						<th>Username : </th>
						<td><input type="text" name="emailidtwo" id="emailidtwo" maxlength="50" /></td>
					</tr>
				</table>
				<br>
				<center><button class = "button" onclick="resetpass(document.getElementById('emailidtwo').value)">Submit</button></center>
				<p><h4><span id="actionresponsetwo"></span></h4></p></center>
			</div>
			<br>
			<div>
				<center><h3>Client Account Log</h3>
				<table>
					<tr>
						<th>Email ID</th>
						<th>Operation Type</th>
						<th>Timestamp</th>
					</tr>
						<?php
							$sqlone = "select * from user_log";
							$resultone = $conn->query($sqlone);

							if ($resultone->num_rows > 0) {
			    				while($row = $resultone->fetch_assoc()) {
			    					echo "<tr>";
									echo "<td>" .$row["EmailID"] ."</td><td>" .$row["Insert_Op"] ."</td><td>" .$row["Date_Of_Op"] ."</td>";
									echo "</tr>";
								}
			    			}
						?>
				</table></center>
			</div>
			<br>
			<center>
			<button type="button" class="button" onclick = "window.location.href='admin_manager.php'" /><b>Back</b></button>
		</center>	
		</center>
	</body>
	<script>
		function changeStatus(username,choice) {
        	var xmlhttp = new XMLHttpRequest();
        	xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("actionresponse").innerHTML = this.responseText;
            }
        	};
        	xmlhttp.open("GET", "/OnlineHotelBookingSystem/Client_Manager_Pages/user_act.php?user=" + username + "&act=" + choice, true);
        	xmlhttp.send();
    	}
    	function resetpass(username) {
        	var xmlhttp = new XMLHttpRequest();
        	xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("actionresponsetwo").innerHTML = this.responseText;
            }
        	};
        	xmlhttp.open("GET", "/OnlineHotelBookingSystem/Client_Manager_Pages/user_reset.php?user=" + username, true);
        	xmlhttp.send();
    	}
	</script>
</html>
