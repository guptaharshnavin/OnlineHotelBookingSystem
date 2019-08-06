<!DOCTYPE html>
<html>
<body>
<form action="data_page.php">
<button>Go Back</button>
</form>
</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_POST['save']))
{
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$gender = $_POST['gender'];
$Birth = $_POST['Birthday_day'];
$aadharno = $_POST['aadharno'];
$Address = $_POST['Address'];
$City = $_POST['City'];
$Pin_Code = $_POST['Pin_Code'];
$State = $_POST['State'];
$Country = $_POST['Country'];
$mobileno = $_POST['mobileno'];
$altmobileno = $_POST['altmobileno'];
$emailid = $_POST['emailid'];


$sql = "INSERT INTO user_details (firstname, lastname, gender, Birthday_day, aadharno, Address, City, Pin_Code, State, Country, mobileno, altmobileno, emailid) VALUES ('$fname', '$lname','$gender','$Birth','$aadharno','$Address','$City','$Pin_Code','$State','$Country','$mobileno','$altmobileno','$emailid')";
}
$conn->close();
?>
