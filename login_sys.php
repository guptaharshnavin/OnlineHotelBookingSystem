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
	$sqlone = "select * from accesslist where username = $username";
	$resultone = $conn->query($sqlone);

	$val = $resultone["password"];

	echo "$val";
	$res = strcmp($resultone["password"],$password);

	if($res == $trueval)
	{
		echo "Second IF Executed";
		header('location: success.php');
	}
}
if($type == $hotel)
{

}



}
mysqli_close($conn);



?>