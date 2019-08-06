<!DOCTYPE html>
<html>
<head>
	<title>Database Connection</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";

//create connection
$conn = new mysqli($servername,$username,$password,$dbname);

//check connection
if($conn->connect_error)
{
	die("Connection failed: ". $conn->connect_error);
}
echo "Connected Successfully";
?>
</body>
</html>