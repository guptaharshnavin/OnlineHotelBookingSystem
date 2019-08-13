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
$parking = $_POST["parking"];
$wifi = $_POST["wifi"];
$laundry = $_POST["laundry"];
$gym = $_POST["gym"];
$pool = $_POST["pool"];
$spa = $_POST["spa"];
$pass = $_POST["passone"];


$type = "hotel";
$status = true;

$_SESSION['username'] = $emailid;
$_SESSION['hotelname'] = $hotelname;
$_SESSION['licenseno'] = $licenseno;

$sqlone = "INSERT INTO hotel_details (hotelname, ownername, licenseno, hotelrating, address, city, pin_code, state, country, mobileno, altmobileno, emailid, altemailid, stdroomno, stdroomprice, delroomno, delroomprice, qdroomno,$qdroomprice, sturoomno, sturoomprice, parking, wifi, laundry, gym, pool, spa)
VALUES ('$hotelname','$ownername','$licenseno','$hotelrating','$address','$city','$pin_code','$state','$country','$mobileno','$altmobileno','$emailid','$altemailid','$stdroomno','$stdroomprice','$delroomno','$delroomprice','$qdroomno','$qdroomprice','$sturoomno','$sturoomprice','$parking','$wifi','$laundry','$gym','$pool','$spa')";

$sqltwo = "INSERT INTO hotelaccesslist (username, password, status)
VALUES ('$emailid','$pass','$status')";

if (mysqli_query($conn, $sqlone)) {
    echo "<b>New record created successfully</b>";
	} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

if (mysqli_query($conn, $sqltwo)) {
    header('location: welcome_hotel.php');
	} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}
mysqli_close($conn);



?>