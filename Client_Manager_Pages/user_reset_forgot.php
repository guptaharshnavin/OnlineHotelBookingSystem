<html>
	<head>
		<title>Forgot Password</title>
		<link rel="stylesheet" type="text/css" href="manager_theme.css">
	</head>
	<body>
		<center><h1>Forgot Password Status</h1></center>
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

if(isset($_POST['save']))
{

$username = $_POST["username"];
$mobile = $_POST["mnumber"];
$city = $_POST["city"];
$pincode = $_POST["pincode"];
$usertype = $_POST["usertype"];
$trueval = 0;

$clientval = "client";

$resulttwo = strcmp($usertype,$clientval);

if($resulttwo == 0)
{
	$sqlone = "select * from userrecords where emailid='".$username."'";
	$resultone = $conn->query($sqlone);
	if ($resultone->num_rows > 0) {
	// output data of each row
	    $row = $resultone->fetch_assoc();

	    $result = strcmp($mobile,$row["mobileno"]);

	    if($result != $trueval)
	    {
	    	echo"<center><h3>Invalid Details Entered !!!</h3></center>";
	    }
	    else
	    {
	    	$result = strcmp($city,$row["city"]);

	    	if($result != $trueval)
	    	{
	    		echo"<center><h3>Invalid Details Entered !!!</h3></center>";
	    	}
	    	else
	    	{
	    		$result = strcmp($pincode,$row["pincode"]);

	    		if($result != $trueval)
	    		{
	    			echo"<center><h3>Invalid Details Entered !!!</h3></center>";
	    		}
	    		else
	    		{
	    			$sqltwo = "update accesslist set password = 'pass@123' where username='".$username."'";
	   				mysqli_query($conn, $sqltwo);
	    			echo "<center><h3>Password Reset Successfully</h3></center>";
	    		}
	    	}
	    }   
	} else {
	    echo"<center><h3>Invalid Details Entered !!!</h3>";
	} 
}
else
{
	$sqlone = "select * from hotel_details where emailid='".$username."'";
	$resultone = $conn->query($sqlone);
	if ($resultone->num_rows > 0) {
	// output data of each row
	    $row = $resultone->fetch_assoc();

	    $result = strcmp($mobile,$row["mobileno"]);

	    if($result != $trueval)
	    {
	    	echo"<center><h3>Invalid Details Entered !!!</h3></center>";
	    }
	    else
	    {
	    	$result = strcmp($city,$row["city"]);

	    	if($result != $trueval)
	    	{
	    		echo"<center><h3>Invalid Details Entered !!!</h3></center>";
	    	}
	    	else
	    	{
	    		$result = strcmp($pincode,$row["pin_code"]);

	    		if($result != $trueval)
	    		{
	    			echo"<center><h3>Invalid Details Entered !!!</h3></center>";
	    		}
	    		else
	    		{
	    			$sqltwo = "update hotelaccesslist set password = 'pass@123' where username='".$username."'";
	   				mysqli_query($conn, $sqltwo);
	    			echo "<center><h3>Password Reset Successfully</h3></center>";
	    		}
	    	}
	    }   
	} else {
	    echo"<center><h3>Invalid Details Entered !!!</h3>";
	}
}
}
mysqli_close($conn);

?>
			<center><button class="button" onclick = "window.location.href='/OnlineHotelBookingSystem/Signin.php'">Sign In</button></center>
			<br>
			<center><button class="button" onclick = "window.location.href='/OnlineHotelBookingSystem/index.php'">Back To Home</button></center>
	</body>
</html>
