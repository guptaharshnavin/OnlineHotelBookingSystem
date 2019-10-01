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
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$gender = $_POST["gender"];
$dob = $_POST["dob"];
$aadharno = $_POST["aadharno"];
$address = $_POST["Address"];
$city = $_POST["City"];
$pincode = $_POST["Pin_Code"];
$state = $_POST["State"];
$country = $_POST["Country"];
$mobileno = $_POST["mobileno"];
$altmobileno = $_POST["altmobileno"];
$emailid = $_POST["emailid"];
$pass = $_POST["passone"];

$status = true;

$_SESSION['username'] = $emailid;
$_SESSION['firstname'] = $firstname;
$_SESSION['lastname'] = $lastname;

$sqlone = "INSERT INTO userrecords (firstname, lastname, gender, dateofbirth, aadharno, address, city, pincode, state, country, mobileno, altmobileno, emailid)
VALUES ('$firstname', '$lastname', '$gender', '$dob', '$aadharno', '$address', '$city', '$pincode', '$state', '$country', '$mobileno', '$altmobileno', '$emailid')";

$sqltwo = "INSERT INTO accesslist (username, password, status)
VALUES ('$emailid','$pass','$status')";

if (mysqli_query($conn, $sqlone)) {
    echo "<b>New record created successfully</b>";
	} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

if (mysqli_query($conn, $sqltwo)) {
    header('location: welcome_user.php');
	} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}
mysqli_close($conn);



?>