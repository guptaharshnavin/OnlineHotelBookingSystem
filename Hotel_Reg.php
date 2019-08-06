<html>
	<head>
		<title>Hotel Registration</title>
		<link rel="stylesheet" type="text/css" href="theme.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<center>
			<table>
				<tr>
					<td><img src="hotel_reg_icon.png" alt="User Registration Icon" width = "100" height="100"></td>
					<td><h1>Hotel Registration</h1></td>
				</tr>
			</table>
		</center>
		<form action="hotel_db.php" name="hotelreg" onsubmit="return check_hotel_reg()" method="post">
			<fieldset>
				<legend>Basic Information</legend>
				<table cellpadding="5">
					<tr>
						<td><b>Hotel Name</b></td>
						<td><input type = "text" name = "hotelname" maxlength="30" /></td>
					</tr>
					<tr>
						<td><b>Owner Name</b></td>
						<td><input type = "text" name = "ownername" maxlength="30" /></td>
					</tr>
					<tr>
						<td><b>License No</b></td>
						<td><input type = "text" name = "licenseno" /></td>
					</tr>
					<tr>
						<td><b>Date Of Establishment</b></td>
						<td><input type="date" name="establish" /></td>
					</tr>
					<tr>
						<td><b>Hotel Rating (By TripAdvisor)</b></td>
						<td><input type="number" name="tripadrating" /></td>
    				</tr>
				</table>
			</fieldset>
			<fieldset>
				<legend>Communication Information</legend>
				<fieldset>
					<legend>Hotel Address</legend>
					<table cellpadding="5">
						<tr>
							<td><b>Address</b> <br /><br /><br /></td>
							<td><textarea name="Address" rows="4" cols="30"></textarea></td>
						</tr>
						<tr>
							<td><b>City</b></td>
							<td><input type="text" name="City" maxlength="30" /></td>
						</tr>
						<tr>
							<td><b>Pin Code</b></td>
							<td><input type="text" name="Pin_Code" maxlength="6" /></td>
						</tr>
						<tr>
							<td><b>State</b></td>
							<td><input type="text" name="State" maxlength="30" /></td>
						</tr>
						<tr>
							<td><b>Country</b></td>
							<td><input type="text" name="Country" value="India" /></td>
						</tr>
					</table>
				</fieldset>
				<fieldset>
					<legend>Contact Information</legend>
					<table cellpadding="10">
						<tr>
							<td><b>Mobile Number</b></td>
							<td><input type="text" name="mobileno" maxlength="10" /></td>
						</tr>
						<tr>
							<td><b>Alternate Mobile Number</b></td>
							<td><input type="text" name="altmobileno" maxlength="10" /></td>
						</tr>
						<tr>
							<td><b>Email ID</b></td>
							<td><input type="email" name="emailid" /></td>
						</tr>
						<tr>
							<td><b>Alternate Email ID</b></td>
							<td><input type="email" name="altemailid" /></td>
						</tr>
					</table>
				</fieldset>
			</fieldset>
			<fieldset>
				<legend>Services Information</legend>
				<table>
					<tr>
						<td><b>Enter The Number Of Rooms & Price Of Each Type Available In Your Hotel</b></td>
					</tr>
				</table>
				<table cellpadding="5">
					<tr>
						<td><b>Room Type</b></td>
						<td><b>Number Of Rooms</b></td>
						<td><b>Price Per Night</b></td>
					</tr>
					<tr>
						<td><b>Standard Room</b></td>
						<td><input type="number" name="stdroomno" /></td>
						<td><input type="number" name="stdroomprice" /></td>
					</tr>
					<tr>
						<td><b>Deluxe Room</b></td>
						<td><input type="number" name="delroomno" /></td>
						<td><input type="number" name="delroomprice" /></td>
					</tr>
					<tr>
						<td><b>Quad Room</b></td>
						<td><input type="number" name="qdroomno" /></td>
						<td><input type="number" name="qdroomprice" /></td>
					</tr>
					<tr>
						<td><b>Studio</b></td>
						<td><input type="number" name="sturoomno" /></td>
						<td><input type="number" name="sturoomprice" /></td>
					</tr>
				</table>
				<table>
					<tr>
						<td><b>Select All Applicable From The Following Amenities, If Available In Your Hotel</b></td>
					</tr>
				</table>	
				<table cellpadding="5">
					<tr>
						<td><b>Parking</b></td>
						<td><input type="checkbox" name="amenities" value="parking" checked /></td>
						<td><b>Wi-Fi</b></td>
						<td><input type="checkbox" name="amenities" value="wifi" /></td>
						<td><b>Laundry</b></td>
						<td><input type="checkbox" name="amenities" value="laundry" /></td>
						<td><b>Gym</b></td>
						<td><input type="checkbox" name="amenities" value="gym" /></td>
						<td><b>Swimming Pool</b></td>
						<td><input type="checkbox" name="amenities" value="pool" /></td>
						<td><b>Spa</b></td>
						<td><input type="checkbox" name="amenities" value="spa" /></td>
					</tr>
				</table>
			</fieldset>
			<center>
				<table>
					<tr>
						<td><button type="submit" class="button" name="save">Submit</button></td>
						<td><button type="reset" class="button">Reset</button></td>
					</tr>
				</table>
			</center>
		</form>
	</body>
	<script type="text/javascript">
		function check_hotel_reg()
		{
			var hotelname = document.forms[""]
		}
	</script>
</html>