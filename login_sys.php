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

if(isset($_POST['save']))
{
$username = $_POST["username"];
$password = $_POST["pass"];
$type = $_POST["usertype"];

$client = "client";
$hotel = "hotel";
$trueval = 0;

$usertype_client = strcmp($type,$client);

if($usertype_client == $trueval)
{
	echo "First IF Executed";
	$sqlone = "select * from accesslist where username = '".$username."'";
	#$sql="SELECT * FROM user WHERE id = '".$q."'";
	$resultone = $conn->query($sqlone);

	#$val = $resultone["password"];

	if ($resultone->num_rows > 0) {
    // output data of each row
    	$row = $resultone->fetch_assoc();
		$pass_match = strcmp($password,$row["password"]);

		if($pass_match == $trueval) {
			echo "Login Success <br> <br>";
			$_SESSION["client_username"] = $username;
			header('location: user_page.php');
		}
    } else {
    	echo "0 results";
		} 
} else {
	echo "First IF Executed";
	$sqltwo = "select * from hotelaccesslist where username = '".$username."'";
	#$sql="SELECT * FROM user WHERE id = '".$q."'";
	$resulttwo = $conn->query($sqltwo);

	#$val = $resultone["password"];

	if ($resulttwo->num_rows > 0) {
    // output data of each row
    	$rowtwo = $resulttwo->fetch_assoc();
		$pass_match_two = strcmp($password,$rowtwo["password"]);

		if($pass_match_two == $trueval) {
			echo "Login Success <br> <br>";
			$_SESSION["hotel_username"] = $username;
			header('location: hotel_page.php');
		}
		else {
    	echo "0 results";
		}
	}
}
}
mysqli_close($conn);
?>