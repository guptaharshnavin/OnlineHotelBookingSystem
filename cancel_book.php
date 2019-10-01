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
		<title>Booking Cancellation</title>
		<link rel="stylesheet" type="text/css" href="manager_theme.css">
	</head>
	<body>
		<center>
			 <td><h1>Booking Cancellation</h1></td>
		</center>
		<center>
				<h3><center>Welcome : <?php echo $_SESSION['client_username']; ?></center></h3>
		
			<div>
				<center><h3>Booking ID : </h3>
				<select id="book_id">
					<?php
						$sqlone = "select * from booking_details where client_email='".$_SESSION['client_username']."'";
						$resultone = $conn->query($sqlone);

						if ($resultone->num_rows > 0) {
			    			while($row = $resultone->fetch_assoc()) {
			    				$sqltwo = "select * from hotel_details where emailid='".$row['Hotel_Email']."'";
			    				$resulttwo = $conn->query($sqltwo);
			    				$rowtwo = $resulttwo->fetch_assoc();
			    				echo "<tr>";
								echo "<td>" .$row["ID"] ."</td><td>" .$rowtwo['hotelname'] ."</td><td>" .$row['Check_In_Date'] ."</td><td>".$row['Check_Out_Date']."</td><td>".$row['DT_Booking']."</td>";
								echo "</tr>";
							}
			    		}
					?>
				</select>
				<table>
					<tr>
						<th>Booking ID</th>
						<th>Hotel Name</th>
						<th>Check-In Date</th>
						<th>Check-Out Date</th>
						<th>Date Of Booking</th>
					</tr>
						
				</table>
				<button type="button" class="button" onclick = "window.location.href='cancel_book.php'" /><b>Cancel Booking</b></button></center>
			</div>
			<br>
			<div>
				<center><h3>Your Invoices</h3>
				<table>
					<tr>
						<th>Invoice ID</th>
						<th>Hotel Name</th>
						<th>Payment Mode</th>
						<th>Amount</th>
						<th>Date Of Invoice</th>
					</tr>
						<?php
							$sqlone = "select * from invoice_details where client_email='".$_SESSION['client_username']."'";
							$resultone = $conn->query($sqlone);

							if ($resultone->num_rows > 0) {
			    				while($row = $resultone->fetch_assoc()) {
			    					$sqltwo = "select * from hotel_details where emailid='".$row['Hotel_Email']."'";
			    					$resulttwo = $conn->query($sqltwo);
			    					$rowtwo = $resulttwo->fetch_assoc();
			    					echo "<tr>";
									echo "<td>" .$row["ID"] ."</td><td>" .$rowtwo['hotelname'] ."</td><td>" .$row["Payment_Mode"] ."</td><td>".$row["Amount"]."</td><td>".$row["Date"]."</td>";
									echo "</tr>";
								}
			    			}
						?>
				</table></center>
			</div>
			<br>
			<div>
				<center><h3>Profile Information</h3>
				<table>
						<?php
							$sqlone = "select * from userrecords where emailid='".$_SESSION['client_username']."'";
							$resultone = $conn->query($sqlone);

							if ($resultone->num_rows > 0) {
			    				while($row = $resultone->fetch_assoc()) {
			    					echo "<tr><th>First Name : </th>";
			    					echo "<td>".$row["firstname"]."</td></tr>";
			    					echo "<tr><th>Last Name : </th>";
			    					echo "<td>".$row["lastname"]."</td></tr>";
			    					echo "<tr><th>Gender : </th>";
			    					echo "<td>".$row["gender"]."</td></tr>";
			    					echo "<tr><th>DOB : </th>";
			    					echo "<td>".$row["dateofbirth"]."</td></tr>";
			    					echo "<tr><th>City : </th>";
			    					echo "<td>".$row["city"]."</td></tr>";
			    					echo "<tr><th>State : </th>";
			    					echo "<td>".$row["state"]."</td></tr>";
			    					echo "<tr><th>Pincode : </th>";
			    					echo "<td>".$row["pincode"]."</td></tr>";
			    					echo "<tr><th>Country : </th>";
			    					echo "<td>".$row["country"]."</td></tr>";
									
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
