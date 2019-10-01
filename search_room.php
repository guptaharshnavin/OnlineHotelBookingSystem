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
		<title>Search Hotels</title>
		<link rel="stylesheet" type="text/css" href="manager_theme.css">
	</head>
	<body>
		<center>
			 <td><h1>Search Hotels</h1></td>
			 
		</center>
		<center>
				<center><h3>Search Hotels</h3>
				<table>
					<tr>
						<th>City : </th>
						<td><input type="text" name="cityname" id="cityname" maxlength="30" /></td>
					</tr>
					<tr>
						<th>Check In Date : </th>
						<td><input type="date" name="cindate" id="cindate" maxlength="10" /></td>
					</tr>
					<tr>
						<th>Check Out Date : </th>
						<td><input type="date" name="coutdate" id="coutdate" maxlength="10" /></td>
					</tr>
					<tr>
						<th>Room Type</th>
						<td>
							 <select id="room_type">
								<option value="stdroomno">Standard Room</option>
								<option value="delroomno">Delux Room</option>
								<option value="qdroomno">Quad Room</option>
								<option value="sturoomno">Studio Room</option>
							  </select> 
						</td>
					</tr>
				</table>
				<h3>Filters</h3>
				<table>
					<tr>
						<th>Star Rating</th>
						<td>
						<select id="star_type">
								<option value="five">5 Star</option>
								<option value="four">4 Star</option>
								<option value="three">3 Star</option>
								<option value="two">2 Star</option>
								<option value="one">1 Star</option>
							  </select> </td>
							 </tr>
				</table>
				<br>
				<center><button class = "button" onclick="searchHotel(document.getElementById('cityname').value,document.getElementById('cindate').value,document.getElementById('coutdate').value,document.getElementById('room_type').value,document.getElementById('star_type').value)">Search</button></center>
				<p><h4><span id="actionresponse"></span></h4></p></center>
			<br>
			
			<br>
		</center>
		<br>
				<center>
					<button class="button" onclick = "window.location.href='index.php'">Back To Home</button>
				</center>
	</body>
	<script>
		function searchHotel(cityname,cindate,coutdate,room_type,star_type) {
        	var xmlhttp = new XMLHttpRequest();
        	xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("actionresponse").innerHTML = this.responseText;
            }
        	};
        	xmlhttp.open("GET", "reserve_room.php?city=" + cityname + "&checkin=" + cindate + "&checkout=" + coutdate + "&room=" + room_type + "&star=" + star_type, true);
        	xmlhttp.send();
    	}
	</script>
</html>
