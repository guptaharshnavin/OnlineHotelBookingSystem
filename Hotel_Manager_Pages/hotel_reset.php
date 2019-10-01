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

$username = $_GET["user"];


$sqlone = "select status from hotelaccesslist where username='".$username."'";

$resultone = $conn->query($sqlone);


	if ($resultone->num_rows > 0) {
	// output data of each row
	    $row = $resultone->fetch_assoc();

	    $sqltwo = "update hotelaccesslist set password = 'pass@123' where username='".$username."'";
	    mysqli_query($conn, $sqltwo);
	    echo "Password Reset Successfully";
	} else {
	    echo "Username Invalid !!!";
	} 
mysqli_close($conn);

?>