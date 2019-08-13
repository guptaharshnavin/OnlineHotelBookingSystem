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
		<form action="hotel_reg_db.php" name="hotelreg" onsubmit="return check_hotel_reg()" method="post">
			<fieldset>
				<legend>Basic Information</legend>
				<table cellpadding="5">
					<tr>
						<td><b>Hotel Name *</b></td>
						<td><input type = "text" name = "hotelname" maxlength="30" /></td>
					</tr>
					<tr>
						<td><b>Owner Name</b></td>
						<td><input type = "text" name = "ownername" maxlength="30" /></td>
					</tr>
					<tr>
						<td><b>License No *</b></td>
						<td><input type = "text" name = "licenseno" maxlength="10" /></td>
					</tr>
					<tr>
						<td><b>Date Of Establishment *</b></td>
						<td>
							<input type="date" name="dateofestablishment" maxlength="10"/>
						</td>
					</tr>
					<tr>
						<td><b>Hotel Rating (By TripAdvisor) *</b></td>
						<td><input type="number" name="hotelrating" min="0"/></td>
    				</tr>
				</table>
			</fieldset>
			<fieldset>
				<legend>Communication Information</legend>
				<fieldset>
					<legend>Hotel Address</legend>
					<table cellpadding="5">
						<tr>
							<td><b>Address *</b> <br /><br /><br /></td>
							<td><textarea name="address" rows="4" cols="30"></textarea></td>
						</tr>
						<tr>
							<td><b>City *</b></td>
							<td><input type="text" name="city" maxlength="30" /></td>
						</tr>
						<tr>
							<td><b>Pin Code</b></td>
							<td><input type="text" name="pin_code" maxlength="6" /></td>
						</tr>
						<tr>
							<td><b>State *</b></td>
							<td><input type="text" name="state" maxlength="30" /></td>
						</tr>
						<tr>
							<td><b>Country *</b></td>
							<td><input type="text" name="country" value="India" /></td>
						</tr>
					</table>
				</fieldset>
				<fieldset>
					<legend>Contact Information</legend>
					<table cellpadding="10">
						<tr>
							<td><b>Mobile Number *</b></td>
							<td><input type="text" name="mobileno" maxlength="10" /></td>
						</tr>
						<tr>
							<td><b>Alternate Mobile Number</b></td>
							<td><input type="text" name="altmobileno" maxlength="10" /></td>
						</tr>
						<tr>
							<td><b>Email ID *</b></td>
							<td><input type="text" name="emailid" maxlength="50" /></td>
						</tr>
						<tr>
							<td><b>Alternate Email ID</b></td>
							<td><input type="text" name="altemailid" maxlength="50"/></td>
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
						<td><input type="number" name="stdroomno" min="0" value="0"/></td>
						<td><input type="number" name="stdroomprice" min="0" value="0"/></td>
					</tr>
					<tr>
						<td><b>Deluxe Room</b></td>
						<td><input type="number" name="delroomno" min="0" value="0"/></td>
						<td><input type="number" name="delroomprice" min="0" value="0"/></td>
					</tr>
					<tr>
						<td><b>Quad Room</b></td>
						<td><input type="number" name="qdroomno" min="0" value="0"/></td>
						<td><input type="number" name="qdroomprice" min="0" value="0"/></td>
					</tr>
					<tr>
						<td><b>Studio</b></td>
						<td><input type="number" name="sturoomno" min="0" value="0"/></td>
						<td><input type="number" name="sturoomprice" min="0" value="0"/></td>
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
						<td><input type="checkbox" name="parking" value="parking" checked /></td>
						<td><b>Wi-Fi</b></td>
						<td><input type="checkbox" name="wifi" value="wifi" /></td>
						<td><b>Laundry</b></td>
						<td><input type="checkbox" name="laundry" value="laundry" /></td>
						<td><b>Gym</b></td>
						<td><input type="checkbox" name="gym" value="gym" /></td>
						<td><b>Swimming Pool</b></td>
						<td><input type="checkbox" name="pool" value="pool" /></td>
						<td><b>Spa</b></td>
						<td><input type="checkbox" name="spa" value="spa" /></td>
					</tr>
				</table>
			</fieldset>
			<fieldset>
				<legend>Password Credentials</legend>
				<table cellpadding="5">
					<tr>
						<td><b>Password</b></td>
						<td><input type="password" name="passone" maxlength="20" /></td>
					</tr>
					<tr>
						<td><b>Reenter Password</b></td>
						<td><input type="password" name="passtwo" maxlength="20" /></td>
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
		function chkform()
		{
			var firstname = document.forms["hotelreg"]["hotelname"];
			var licenseno = document.forms["hotelreg"]["licenseno"];
			var doe = document.forms["hotelreg"]["doe"];
			var tripadrating = document.forms["hotelreg"]["tripadrating"];
			var address = document.forms["hotelreg"]["Address"];
			var city = document.forms["hotelreg"]["City"];
			var country = document.forms["hotelreg"]["Country"];
			var state = document.forms["hotelreg"]["State"];
			var mobile = document.forms["hotelreg"]["mobileno"];
			var email = document.forms["hotelreg"]["emailid"];
			var passone = document.forms["hotelreg"]["passone"];
			var passtwo = document.forms["hotelreg"]["passtwo"];

			if(hotelname.value == "")
			{
				window.alert("Please Enter Hotel Name !");
				hotelname.focus();
				return false;
			}
			if(licenseno.value == "")
			{
				window.alert("Please Enter License Number !");
				licenseno.focus();
				return false;
			}
			if(doe.value == "")
			{
				window.alert("Please Enter Date Of Establishment !");
				doe.focus();
				return false;
			}
			if(country.value == "")
			{
				window.alert("Please Enter Country !");
				country.focus();
				return false;
			}
			if(address.value == "")
			{
				window.alert("Please Enter Address !");
				address.focus();
				return false;
			}
			if(state.value == "")
			{
				window.alert("Please Enter State !");
				pincode.focus();
				return false;
			}
			if(country.value == "")
			{
				window.alert("Please Enter Country !");
				country.focus();
				return false;
			}
			if(mobile.value == "")
			{
				window.alert("Please Enter Mobile Number !");
				mobile.focus();
				return false;
			}
			if(email.value == "")
			{
				window.alert("Please Enter Email ID !");
				email.focus();
				return false;
			}
			var n = passone.localeCompare(passtwo);
			var x = 1;
			if(n == x)
			{
				window.alert("Password Mismatch");
				passone.focus();
				return false;
			}
			return true;
		}
	</script>
</html>