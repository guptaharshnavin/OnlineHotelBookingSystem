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
$hotelname = $_POST["hotelname"];
$ownername = $_POST["ownername"];
$licenseno = $_POST["licenseno"];
$dateofestablishment = $_POST["dateofestablishment"];
$hotelrating = $_POST["hotelrating"];
$address = $_POST["address"];
$city = $_POST["city"];
$pincode = $_POST["pin_code"];
$state = $_POST["state"];
$country = $_POST["country"];
$mobileno = $_POST["mobileno"];
$altmobileno = $_POST["altmobileno"];
$emailid = $_POST["emailid"];
$altemailid = $_POST["altemailid"];
$stdroomno = $_POST["stdroomno"];
$stdroomprice = $_POST["stdroomprice"];
$delroomno = $_POST["delroomno"];
$delroomprice = $_POST["delroomprice"];
$qdroomno = $_POST["qdroomno"];
$qdroomprice = $_POST["qdroomprice"];
$sturoomno = $_POST["sturoomno"];
$sturoomprice = $_POST["sturoomprice"];
$amen = $_POST["amenities"];
$arrlength = count($amen);
$parking = "false";
$wifi = "false";
$laundry = "false";
$gym = "false";
$pool = "false";
$spa = "false";

for($x = 0; $x < $arrlength; $x++) {
	$res = strcmp($amen[$x],"p");
	if(res == 0) {
		$parking="true";
	}
	else {
		$parking="false";
	}
	$res = strcmp($amen[$x],"w");
	if($res == 0) {
		$wifi="true";
	}
	else {
		$wifi="false";
	}
	$res = strcmp($amen[$x],"l");
	if($res == 0) {
		$laundry="true";
	}
	else {
		$laundry="false";
	}
	$res = strcmp($amen[$x],"g");
	if($res == 0) {
		$gym="true";
	}
	else {
		$gym="false";
	}
	$res = strcmp($amen[$x],"pl");
	if($res == 0) {
		$pool="true";
	}
	else {
		$pool="false";
	}
	$res = strcmp($amen[$x],"s");
	if($res == 0) {
		$spa="true";
	}
	else {
		$spa="false";
	}
}
$pass = $_POST["passone"];


$type = "hotel";
$status = true;

$_SESSION['username'] = $emailid;
$_SESSION['hotelname'] = $hotelname;
$_SESSION['licenseno'] = $licenseno;

$sqlone = "INSERT INTO hotel_details (hotelname, ownername, licenseno, dateofestablishment, hotelrating, address, city, pin_code, state, country, mobileno, altmobileno, emailid, altemailid, stdroomno, stdroomprice, delroomno, delroomprice, qdroomno,qdroomprice, sturoomno, sturoomprice, parking, wifi, laundry, gym, pool, spa) VALUES ('$hotelname','$ownername','$licenseno','$dateofestablishment','$hotelrating','$address','$city','$pincode','$state','$country','$mobileno','$altmobileno','$emailid','$altemailid','$stdroomno','$stdroomprice','$delroomno','$delroomprice','$qdroomno','$qdroomprice','$sturoomno','$sturoomprice','$parking','$wifi','$laundry','$gym','$pool','$spa')";

$sqltwo = "INSERT INTO hotelaccesslist (username, password, status)
VALUES ('$emailid','$pass','$status')";

if (mysqli_query($conn, $sqlone)) {
    echo "<b>New record created successfully</b>";
	} 
else {
    echo "Error: " . $sqlone . "<br>" . mysqli_error($conn);
}

if (mysqli_query($conn, $sqltwo)) {
    header('location: welcome_hotel.php');
	} 
else {
    echo "Error: " . $sqltwo . "<br>" . mysqli_error($conn);
}

}
mysqli_close($conn);



?>