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

echo "Connected Successfully";


$username = $_POST["username"];
$password = $_POST["pass"];
$type = "client";

$client = "client";
$hotel = "hotel";
$trueval = 0;

$usertype_client = strcmp($type,$client);

echo "First IF Executed";
$sqlone = "select * from accesslist where username = '".$username."'";
$sqltwo = "select * from hotel_details where emailid = '".$_SESSION["book_email"]."'";
	
$resultone = $conn->query($sqlone);
$resulttwo = $conn->query($sqltwo);

$rowtwo = $resulttwo->fetch_assoc();
$_SESSION["book_hotel_name"] = $rowtwo["hotelname"];

if ($resultone->num_rows > 0) {
    $row = $resultone->fetch_assoc();
	$pass_match = strcmp($password,$row["password"]);

	if($pass_match == $trueval) {
		echo "Login Success <br> <br>";
		header('location: payment_confirm.php');
		$_SESSION["book_username"] = $row["username"];
	}
} else {
    echo "0 results";
} 
mysqli_close($conn);
?>