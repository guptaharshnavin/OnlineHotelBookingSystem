<?php
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


$sql = "INSERT INTO userrecords (firstname, lastname, gender, dob, aadharno, address, city, pincode, state, country, mobileno, altmobileno, emailid)
VALUES ('$firstname', '$lastname', '$gender', '$dob', '$aadharno', '$address', '$city', '$pincode', '$state', '$country', '$mobileno', '$altmobileno', '$emailid')";

/*
$sql = "INSERT INTO hotel_details
VALUES ($hotelname,$ownername,$licenseno,$hotelrating,$address,$city,$pin_code,$state,$country,$mobileno,$altmobileno,$emailid,$altemailid,$stdroomno,$stdroomprice,$delroomno,$qdroomno,$qdroomprice,$sturoomno,$sturoomprice,$parking,$wifi,$laundry,$gym,$pool,$spa)";
*/
if (mysqli_query($conn, $sql)) {
    echo "<b>New record created successfully</b>";

		try
		{
			$mail = new PHPMailer\PHPMailer\PHPMailer();
			$mailid = $emailid;
			$subject = "Welcome To Hotel Booking Management System";
			$message = "Hello $firstname $lastname You Have Successfully Registered With Us, With Username : $mobileno.";
			$mail->IsSMTP();
			$mail->isHTML(true);
			$mail->SMTPDebug = 0;
			$mail->SMTPAuth = true;
			$mail->SMTPSecure = "ssl";
			$mail->Host = "smtp.gmail.com";
			$mail->Port = '465';
			$mail->AddAddress($mailid);
			$mail->Username ="onlinehotelbs@gmail.com";
			$mail->Password ="Harsh@123";
			$mail->SetFrom('onlinehotelbs@gmail','Harsh Rushabh');
			$mail->AddReplyTo('onlinehotelbs@gmail','Harsh Rushabh');
			$mail->Subject = $subject;
			$mail->Body = $message;
			$mail->AltBody = $message;
			if($mail->Send())
			{
			echo "Thank you for register u got a notification through the mail you provide";
			}
		}
		catch(phpmailerException $ex)
		{
			$msg = "
			".$ex->errorMessage()."
			";
		}
	} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}
mysqli_close($conn);



?>