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


$city = $_GET["city"];
$check_in = $_GET["checkin"];
$check_out = $_GET["checkout"];
$room = $_GET["room"];
$star = $_GET["star"];

$five="five";
$four="four";
$three="three";
$two="two";
$one="one";

?>
<html>
<body>

	<?php
		#Finding Out Star Rating
		$star_rate = 5;
		$res = strcmp($star,$four);
		if($res == 0) {
			$star_rate = 4;
		}
		$res = strcmp($star,$three);
		if($res == 0) {
			$star_rate = 3;
		}
		$res = strcmp($star,$two);
		if($res == 0) {
			$star_rate = 2;
		}
		$res = strcmp($star,$one);
		if($res == 0) {
			$star_rate = 1;
		}

		$sqlone = "select * from hotel_details where hotelrating='".$star_rate."'"."and ".$room."".">0 and city='".$city."'";
		#echo $sqlone;

		$resultone = $conn->query($sqlone);

		if ($resultone->num_rows > 0) {
		while($row = $resultone->fetch_assoc()) {
			echo "<div><table><tr>";
			echo "<th>Hotel Name : </th><td>" .$row["hotelname"] ."</td></tr><tr><th>Rating : </th><td>".$row["hotelrating"]."</td></tr><tr><th>Address :</th><td>".$row["address"]."</td></tr><tr><th>City :</th><td>".$row["city"]."</td></tr><tr><th>State : </th><td>".$row["state"]."</td></tr><tr><th>Country : </th><td>".$row["country"]."</td>";
			echo "</tr>";
			$link = "login_book.php?hotelemail=".$row["emailid"]."&room=".$room."&checkin=".$check_in."&checkout=".$check_out;

			echo "<tr><td><a href=".$link.">Book Now</a></td></tr></table></div><br>";

			}
		}
?>
</body>
</html>