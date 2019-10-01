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
$action = $_GET["act"];


$status = 0;
$action_act = "act";
$action_deact = "deact";
$active = 1;

$sqlone = "select status from accesslist where username='".$username."'";

$resultone = $conn->query($sqlone);


	if ($resultone->num_rows > 0) {
	// output data of each row
	    $row = $resultone->fetch_assoc();
	    $action_type = strcmp($action,$action_deact);

	    if($action_type == $status) {
	    	if($row["status"] == $active) {
	    		echo "Account Deactivated";
	    		$sqlthree = "update accesslist set status = 0 where username='".$username."'";
	    		mysqli_query($conn, $sqlthree);
	    	} else {
	    		echo "Account Already Deactivated";
	    		
	    	}
	    } else {
	    	if($row["status"] == $active) {
	    		echo "Account Already Activated";
	    	} else {
	    		echo "Account Activated";
	    		$sqltwo = "update accesslist set status = 1 where username='".$username."'";
	    		mysqli_query($conn, $sqltwo);
	    	}
	    }    
	} else {
	    echo "Username Invalid !!!";
	} 
mysqli_close($conn);

?>