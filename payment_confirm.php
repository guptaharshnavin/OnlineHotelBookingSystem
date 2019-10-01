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

$sqltwo = "select * from hotel_details where emailid = '".$_SESSION["book_email"]."'";
$resulttwo = $conn->query($sqltwo);

$std = "stdroomno";
$del = "delroomno";
$qd = "qdroomno";
$stu = "sturoomno";

$amount = 0;
$room_name = "Sample";

$rowtwo = $resulttwo->fetch_assoc();

$res = strcmp($std,$_SESSION["room_type"]);
if($res == 0)
{
	$amount = $rowtwo["stdroomprice"] * $_SESSION["days"];
	$room_name = "Standard Room";
}

$res = strcmp($del,$_SESSION["room_type"]);
if($res == 0)
{
	$amount = $rowtwo["delroomprice"] * $_SESSION["days"];
	$room_name = "Deluxe Room";
}

$res = strcmp($qd,$_SESSION["room_type"]);
if($res == 0)
{
	$amount = $rowtwo["qdroomprice"] * $_SESSION["days"];
	$room_name = "Quad Room";
}

$res = strcmp($stu,$_SESSION["room_type"]);
if($res == 0)
{
	$amount = $rowtwo["sturoomprice"] * $_SESSION["days"];
	$room_name = "Studio Room";
}
$_SESSION["amount"] = $amount;
?>
<html>
	<head>
		<title>Payment Confirmation Page</title>
		<link rel="stylesheet" type="text/css" href="manager_theme.css">
	</head>
	<body>
		<center>
			 <td><h1>Payment Confirmation Page</h1></td>
			 <h3><center>Username : <?php echo $_SESSION['book_username']; ?></center></h3>
		</center>
		<center>
			<div>
				<center><h3>Payment Information</h3>
				<table>
					<tr>
						<th>Hotel Name : </th>
						<td><?php echo $_SESSION['book_hotel_name']; ?></td>
					</tr>
					<tr>
						<th>Room Type : </th>
						<td><?php echo $room_name; ?></td>
					</tr>
					<tr>
						<th>Total Days : </th>
						<td><?php echo $_SESSION['days']; ?></td>
					</tr>
					<tr>
						<th>Payable Amount : </th>
						<td><?php echo $amount; ?></td>
					</tr>
				</table>
				<br>
				</center>
			</div>
			<br>
			<div>
				<center><h3>Credit Card Information</h3>
				<table>
					<tr>
						<th>Credit Card Number : </th>
						<td><input type="text" name="cardnumber" id="cardnumber" maxlength="16" required/></td>
					</tr>
					<tr>
						<th>Name On Card : </th>
						<td><input type="text" name="cardnumber" id="cardnumber" maxlength="50" required/></td>
					</tr>
				</table>
				<table>
					<tr>
						<th>Valid Thru </th>
						<td>Month :</td>
						<td><input type="number" name="cardmm" id="cardmm" required/></td>
						<td>Year :</td>
						<td><input type="number" name="cardyy" id="cardyy" required/></td>
					</tr>
				</table>
			</div>
			<br>
			<center><button class = "button" onclick="window.location.href = 'payment_success.php'">Pay Now</button></center>
			<br>
			<center><button class = "button" onclick="window.location.href = 'search_room.php'">Cancel</button></center>
		</center>
	</body>
</html>
