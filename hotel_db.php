<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hoteldb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_POST['save']))
{
$hotelname = $_POST['hotelname'];
$ownername = $_POST['ownername'];
$lic_no = $_POST['licenseno'];
$doe = $_POST['establish'];
$rating = $_POST['tripadrating'];
$address = $_POST['Address'];
$city = $_POST['City'];
$pincode = $_POST['Pin_Code'];
$state = $_POST['State'];
$country = $_POST['Country'];
$mobile = $_POST['mobileno'];
$altmobile = $_POST['altmobileno'];
$email = $_POST['emailid'];
$altemail = $_POST['altemailid'];
$stdno = $_POST['stdroomno'];
$stdprice = $_POST['stdroomprice'];
$delno = $_POST['delroomno'];
$delprice = $_POST['delroomprice'];
$qdno = $_POST['qdroomno'];
$qdprice = $_POST['qdroomprice'];
$stuno = $_POST['sturoomno'];
$stuprice = $_POST['sturoomprice'];
$amenities = $_POST['amenities'];

$sql = "INSERT INTO hotel_details (hotelname,ownername,licenseno,establish,tripadrating,Address,City,Pin_Code,State,Country,mobileno,altmobileno,emailid,altemailid,stdroomno,stdroomprice,delroomno,delroomprice,qdroomno,qdroomprice,sturoomno,sturoomprice,amenities) VALUES ('$hotelname','$ownername','$lic_no','$doe','$rating','$address','$city','$pincode','$state','$country','$mobile','$altmobile','$email','$altemail','$stdno','$stdprice','$delno','$delprice','$qdno','$qdprice','$stuno','$stuprice','$amenities')";

	if ($conn->query($sql) === TRUE) 
	{
	    echo "New Hotel Registered Successfully";
	} 
	else 
	{
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
$conn->close();
?>