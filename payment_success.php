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
$type = "Card";

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

$client_email = $_SESSION["book_username"];
$hotel_email = $_SESSION["book_email"];
$checkin_date = $_SESSION["checkin"];
$checkout_date = $_SESSION["checkout"];
$amount_total = $_SESSION["amount"];

$sqlone = "INSERT INTO booking_details (client_email, hotel_email, check_in_date, check_out_date)
VALUES ('$client_email', '$hotel_email', '$checkin_date', '$checkout_date')";

$sqltwo = "INSERT INTO invoice_details (amount, payment_mode, client_email, hotel_email)
VALUES ('$amount_total','$type','$client_email', '$hotel_email')";


if (mysqli_query($conn, $sqlone)) {
    echo "<center><h1>Payment Success</h1></center>";
	} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

if (mysqli_query($conn, $sqltwo)) {
    echo "<br><center><h1>Thank You !!</h1></center>";
	} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
<html>
	<head>
		<title>Payment Success</title>
		<link rel="stylesheet" type="text/css" href="manager_theme.css">
	</head>
	<body>
		<center>
			<center><button class = "button" onclick="window.location.href = 'index.php'">Go To Homepage</button></center>
			<br>
		</center>
		<br>
				<center>
					<button class="button" onclick = "window.location.href='Signin.php'">Sign In</button>
				</center>
	</body>
</html>

