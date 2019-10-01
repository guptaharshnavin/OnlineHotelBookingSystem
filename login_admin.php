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

$trueval = 0;

$_SESSION["admin_username"] = $username;
$_SESSION["admin_password"] = $password;

$sqlone = "select * from admin_accesslist where username = '".$username."'";
$resultone = $conn->query($sqlone);


	if ($resultone->num_rows > 0) {
	// output data of each row
	    $row = $resultone->fetch_assoc();
		$pass_match = strcmp($password,$row["password"]);

		if($pass_match == $trueval) {
			header('location: admin_manager.php');
		}
	} else {
	    echo "0 results";
	} 

}
mysqli_close($conn);
?>