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
		<title>Hotel Account Summary</title>
		<link rel="stylesheet" type="text/css" href="manager_theme.css">
	</head>
	<body>
		<center>
			 <td><h1>Hotel Account Summary</h1></td>
		</center>
		<center>
				<h3><center>Welcome : <?php echo $_SESSION['hotel_username']; ?></center></h3>
		
			<div>
				<center><h3>Your Bookings</h3>
				<table>
					<tr>
						<th>Booking ID</th>
						<th>Client Email</th>
						<th>Client Name</th>
						<th>Check-In Date</th>
						<th>Check-Out Date</th>
						<th>Date Of Booking</th>
					</tr>
						<?php
							$sqlone = "select * from booking_details where hotel_email='".$_SESSION['hotel_username']."'";
							$resultone = $conn->query($sqlone);

							if ($resultone->num_rows > 0) {
			    				while($row = $resultone->fetch_assoc()) {
			    					$sqltwo = "select * from userrecords where emailid='".$row['Client_Email']."'";
			    					$resulttwo = $conn->query($sqltwo);
			    					$rowtwo = $resulttwo->fetch_assoc();
			    					echo "<tr>";
									echo "<td>" .$row["ID"] ."</td><td>".$rowtwo["firstname"]." ".$rowtwo["lastname"]."</td><td>".$rowtwo["emailid"]."</td><td>".$row['Check_In_Date'] ."</td><td>".$row['Check_Out_Date']."</td><td>".$row['DT_Booking']."</td>";
									echo "</tr>";
								}
			    			}
						?>
				</table></center>
			</div>
			<br>
			<div>
				<center><h3>Your Invoices</h3>
				<table>
					<tr>
						<th>Invoice ID</th>
						<th>Client Name</th>
						<th>Client Email</th>
						<th>Payment Mode</th>
						<th>Amount</th>
						<th>Date Of Invoice</th>
					</tr>
						<?php
							$sqlone = "select * from invoice_details where hotel_email='".$_SESSION['hotel_username']."'";
							$resultone = $conn->query($sqlone);

							if ($resultone->num_rows > 0) {
			    				while($row = $resultone->fetch_assoc()) {
			    					$sqltwo = "select * from userrecords where emailid='".$row['Client_Email']."'";
			    					$resulttwo = $conn->query($sqltwo);
			    					$rowtwo = $resulttwo->fetch_assoc();
			    					echo "<tr>";
									echo "<td>" .$row["ID"] ."</td><td>".$rowtwo["firstname"]." ".$rowtwo["lastname"]."</td><td>".$rowtwo["emailid"]."</td><td>" .$row["Payment_Mode"] ."</td><td>".$row["Amount"]."</td><td>".$row["Date"]."</td>";
									echo "</tr>";
								}
			    			}
						?>
				</table></center>
			</div>
			<br>
			<center>
			<button type="button" class="button" onclick = "window.location.href='Signin.php'" /><b>Logout</b></button>
		</center>	
		</center>
	</body>
</html>
